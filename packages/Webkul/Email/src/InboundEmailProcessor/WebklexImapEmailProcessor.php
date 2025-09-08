<?php

namespace Webkul\Email\InboundEmailProcessor;

use Illuminate\Support\Facades\Log;
use Webklex\IMAP\Facades\Client;
use Webkul\Email\Enums\SupportedFolderEnum;
use Webkul\Email\InboundEmailProcessor\Contracts\InboundEmailProcessor;
use Webkul\Email\Repositories\AttachmentRepository;
use Webkul\Email\Repositories\EmailRepository;

class WebklexImapEmailProcessor implements InboundEmailProcessor
{
    /**
     * The IMAP client instance.
     */
    protected $client;

    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected EmailRepository $emailRepository,
        protected AttachmentRepository $attachmentRepository
    ) {
        $this->client = Client::make($this->getDefaultConfigs());

        $this->client->connect();

        if (! $this->client->isConnected()) {
            throw new \Exception('Failed to connect to the mail server.');
        }
    }

    /**
     * Close the connection.
     */
    public function __destruct()
    {
        $this->client->disconnect();
    }

    /**
     * Process messages from all folders.
     */
    public function processMessagesFromAllFolders()
    {
        try {
            $rootFolders = $this->client->getFolders();
            $this->processMessagesFromLeafFolders($rootFolders);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Process the inbound email.
     *
     * @param  ?\Webklex\PHPIMAP\Message  $message
     */
    public function processMessage($message = null): void
    {
        Log::info('PROCESS STARTED: '.($message->getSubject() ?? 'no subject'));
        Log::info('[DEBUG] processMessage() called');

        try {
            $attributes = $message->getAttributes();
            $messageId = $attributes['message_id']->first();

            $email = $this->emailRepository->findOneByField('message_id', $messageId);

            if ($email) {
                Log::info("Message already exists: $messageId");

                return;
            }

            $replyToEmails = $this->getEmailsByAttributeCode($attributes, 'to');

            foreach ($replyToEmails as $to) {
                if ($email = $this->emailRepository->findOneWhere(['message_id' => $to])) {
                    break;
                }
            }

            if (! isset($email) && isset($attributes['in_reply_to'])) {
                $inReplyTo = $attributes['in_reply_to']->first();

                $email = $this->emailRepository->findOneWhere(['message_id' => $inReplyTo])
                    ?? $this->emailRepository->findOneWhere([['reference_ids', 'like', '%'.$inReplyTo.'%']]);
            }

            // ここで references を一次元配列として生成
            $references = array_filter(array_merge(
                [$messageId],
                isset($attributes['references']) ? $attributes['references']->all() : []
            ));

            /**
             * Maps the folder name to the supported folder in our application.
             *
             * To Do: Review this.
             */
            $folderName = match ($message->getFolder()->name) {
                'INBOX'     => SupportedFolderEnum::INBOX->value,
                'Important' => SupportedFolderEnum::IMPORTANT->value,
                'Starred'   => SupportedFolderEnum::STARRED->value,
                'Drafts'    => SupportedFolderEnum::DRAFT->value,
                'Sent Mail' => SupportedFolderEnum::SENT->value,
                'Trash'     => SupportedFolderEnum::TRASH->value,
                default     => '',
            };

            $parentEmail = null;

            if ($email) {
                $refIds = array_merge(
                    is_array($email->reference_ids) ? $email->reference_ids : [],
                    $references
                );

                $parentEmail = $this->emailRepository->update([
                    'folders'       => array_unique(array_merge($email->folders, [$folderName])),
                    'reference_ids' => array_values(array_unique($refIds)),
                ], $email->id);
            }

            $emailData = [
                'from'          => $attributes['from']->first()->mail,
                'subject'       => $attributes['subject']->first(),
                'name'          => $attributes['from']->first()->personal,
                'reply'         => $message->bodies['html'] ?? (! empty($message->bodies['text']) ? nl2br(e($message->bodies['text'])) : '(本文なし)'),
                'is_read'       => (int) $message->flags()->has('seen'),
                'folders'       => [$folderName],
                'reply_to'      => $this->getEmailsByAttributeCode($attributes, 'to'),
                'cc'            => $this->getEmailsByAttributeCode($attributes, 'cc'),
                'bcc'           => $this->getEmailsByAttributeCode($attributes, 'bcc'),
                'source'        => 'email',
                'user_type'     => 'person',
                'unique_id'     => $messageId,
                'message_id'    => $messageId,
                'reference_ids' => array_values(array_unique($references)),
                'created_at'    => $this->convertToDesiredTimezone($message->date->toDate()),
                'parent_id'     => $parentEmail?->id,
            ];

            // Log::info('Creating email', ['data' => $emailData]);

            $email = $this->emailRepository->create($emailData);

            Log::info('Email created: '.$email->id);

            if ($message->hasAttachments()) {
                $this->attachmentRepository->uploadAttachments($email, [
                    'source'      => 'email',
                    'attachments' => $message->getAttachments(),
                ]);
            }

        } catch (\Throwable $e) {
            Log::error('Email processing error: '.$e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }

    /**
     * Process the messages from all folders.
     *
     * @param  \Webklex\IMAP\Support\FolderCollection  $rootFoldersCollection
     */
    protected function processMessagesFromLeafFolders($folders)
    {
        $folders->each(function ($folder) {
            Log::info('[DEBUG] Folder found: '.$folder->name);

            if (in_array($folder->name, ['All Mail'])) {
                Log::info('[DEBUG] Skipping folder: '.$folder->name);

                return;
            }

            // 自身を処理
            Log::info('[DEBUG] Scanning folder: '.$folder->name);
            $messages = $folder->query()->all()->get();
            Log::info('[DEBUG] Message count in '.$folder->name.': '.$messages->count());

            $messages->each(function ($message) {
                $this->processMessage($message);
            });

            // 子も処理（あれば）
            if (! $folder->children->isEmpty()) {
                $this->processMessagesFromLeafFolders($folder->children);
            }
        });
    }

    /**
     * Get the emails by the attribute code.
     */
    protected function getEmailsByAttributeCode(array $attributes, string $attributeCode): array
    {
        $emails = [];

        if (isset($attributes[$attributeCode])) {
            $emails = collect($attributes[$attributeCode]->all())->map(fn ($attribute) => $attribute->mail)->toArray();
        }

        return $emails;
    }

    /**
     * Convert the date to the desired timezone.
     *
     * @param  \Carbon\Carbon  $carbonDate
     * @param  ?string  $targetTimezone
     */
    protected function convertToDesiredTimezone($carbonDate, $targetTimezone = null)
    {
        $targetTimezone = $targetTimezone ?: config('app.timezone');

        return $carbonDate->clone()->setTimezone($targetTimezone);
    }

    /**
     * Get the default configurations.
     */
    protected function getDefaultConfigs(): array
    {
        $defaultConfig = config('imap.accounts.default');

        $defaultConfig['host'] = core()->getConfigData('email.imap.account.host') ?: $defaultConfig['host'];
        $defaultConfig['port'] = core()->getConfigData('email.imap.account.port') ?: $defaultConfig['port'];
        $defaultConfig['encryption'] = core()->getConfigData('email.imap.account.encryption') ?: $defaultConfig['encryption'];
        $defaultConfig['validate_cert'] = (bool) core()->getConfigData('email.imap.account.validate_cert');
        $defaultConfig['username'] = core()->getConfigData('email.imap.account.username') ?: $defaultConfig['username'];
        $defaultConfig['password'] = core()->getConfigData('email.imap.account.password') ?: $defaultConfig['password'];

        return $defaultConfig;
    }
}
