<?php

return [
    'acl' => [
        'leads'           => 'リード',
        'lead'            => 'リード',
        'quotes'          => '見積もり',
        'mail'            => 'メール',
        'inbox'           => '受信トレイ',
        'draft'           => '下書き',
        'outbox'          => '送信トレイ',
        'sent'            => '送信済み',
        'trash'           => 'ゴミ箱',
        'activities'      => 'アクティビティ',
        'webhook'         => 'Webhook',
        'contacts'        => '連絡先',
        'persons'         => '人物',
        'organizations'   => '組織',
        'products'        => '製品',
        'settings'        => '設定',
        'groups'          => 'グループ',
        'roles'           => '役割',
        'users'           => 'ユーザー',
        'user'            => 'ユーザー',
        'automation'      => '自動化',
        'attributes'      => '属性',
        'pipelines'       => 'パイプライン',
        'sources'         => 'ソース',
        'types'           => 'タイプ',
        'email-templates' => 'メールテンプレート',
        'workflows'       => 'ワークフロー',
        'other-settings'  => 'その他の設定',
        'tags'            => 'タグ',
        'configuration'   => '設定',
        'create'          => '作成',
        'edit'            => '編集',
        'view'            => '表示',
        'print'           => '印刷',
        'delete'          => '削除',
        'export'          => 'エクスポート',
        'mass-delete'     => '一括削除',
    ],

    'users' => [
        'activate-warning' => 'あなたのアカウントはまだ有効化されていません。管理者に連絡してください。',
        'login-error'      => '入力された認証情報が記録と一致しません。',

        'login' => [
            'email'                => 'メールアドレス',
            'forget-password-link' => 'パスワードをお忘れですか？',
            'password'             => 'パスワード',
            'submit-btn'           => 'サインイン',
            'title'                => 'サインイン',
        ],

        'forget-password' => [
            'create' => [
                'email'           => '登録済みのメールアドレス',
                'email-not-exist' => 'メールアドレスが存在しません',
                'page-title'      => 'パスワードをお忘れですか',
                'reset-link-sent' => 'パスワードリセット用のリンクを送信しました',
                'sign-in-link'    => 'サインイン画面へ戻る',
                'submit-btn'      => 'リセット',
                'title'           => 'パスワードをリセット',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'サインイン画面へ戻る',
            'confirm-password' => 'パスワードの確認',
            'email'            => '登録済みのメールアドレス',
            'password'         => 'パスワード',
            'submit-btn'       => 'パスワードをリセット',
            'title'            => 'パスワードのリセット',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => '戻る',
            'change-password'   => 'パスワードを変更',
            'confirm-password'  => 'パスワードを確認',
            'current-password'  => '現在のパスワード',
            'email'             => 'メールアドレス',
            'general'           => '一般設定',
            'invalid-password'  => '入力された現在のパスワードが正しくありません。',
            'name'              => '名前',
            'password'          => 'パスワード',
            'profile-image'     => 'プロフィール画像',
            'save-btn'          => 'アカウントを保存',
            'title'             => 'マイアカウント',
            'update-success'    => 'アカウントが正常に更新されました。',
            'upload-image-info' => 'プロフィール画像をアップロード（110px X 110px、PNGまたはJPG形式）',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'メール',
                    'title'        => 'メール作成',
                    'to'           => '宛先',
                    'enter-emails' => 'Enterキーでメールアドレスを追加',
                    'cc'           => 'CC',
                    'bcc'          => 'BCC',
                    'subject'      => '件名',
                    'send-btn'     => '送信',
                    'message'      => 'メッセージ',
                ],

                'file' => [
                    'btn'           => 'ファイル',
                    'title'         => 'ファイルを追加',
                    'title-control' => 'タイトル',
                    'name'          => '名前',
                    'description'   => '説明',
                    'file'          => 'ファイル',
                    'save-btn'      => 'ファイルを保存',
                ],

                'note' => [
                    'btn'      => 'ノート',
                    'title'    => 'ノートを追加',
                    'comment'  => 'コメント',
                    'save-btn' => 'ノートを保存',
                ],

                'activity' => [
                    'btn'           => 'アクティビティ',
                    'title'         => 'アクティビティを追加',
                    'title-control' => 'タイトル',
                    'description'   => '説明',
                    'schedule-from' => '開始日時',
                    'schedule-to'   => '終了日時',
                    'location'      => '場所',
                    'call'          => '通話',
                    'meeting'       => '会議',
                    'lunch'         => 'ランチ',
                    'save-btn'      => 'アクティビティを保存',

                    'participants' => [
                        'title'       => '参加者',
                        'placeholder' => '参加者を検索',
                        'users'       => 'ユーザー',
                        'persons'     => '人物',
                        'no-results'  => '結果が見つかりません...',
                    ],
                ],
            ],

            'index' => [
                'from'         => '送信元',
                'to'           => '宛先',
                'cc'           => 'CC',
                'bcc'          => 'BCC',
                'all'          => 'すべて',
                'planned'      => '予定済み',
                'calls'        => '通話',
                'meetings'     => '会議',
                'lunches'      => 'ランチ',
                'files'        => 'ファイル',
                'quotes'       => '見積もり',
                'notes'        => 'ノート',
                'emails'       => 'メール',
                'change-log'   => '変更履歴',
                'by-user'      => ':user による',
                'scheduled-on' => 'スケジュール日時',
                'location'     => '場所',
                'participants' => '参加者',
                'mark-as-done' => '完了としてマーク',
                'delete'       => '削除',
                'edit'         => '編集',
                'view'         => '表示',
                'unlink'       => 'リンク解除',
                'empty'        => 'データなし',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'アクティビティがありません',
                        'description' => 'アクティビティが登録されていません。左のパネルから追加してください。',
                    ],

                    'planned' => [
                        'title'       => '予定されたアクティビティがありません',
                        'description' => '予定済みのアクティビティがありません。左のパネルから追加してください。',
                    ],

                    'notes' => [
                        'title'       => 'ノートがありません',
                        'description' => 'ノートが登録されていません。左のパネルから追加してください。',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => '画像を追加',
                'ai-add-image-btn'  => 'Magic AI',
                'allowed-types'     => '許可される形式: png, jpeg, jpg',
                'not-allowed-error' => '画像ファイル（.jpeg, .jpg, .png）のみ許可されています。',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'レコードが選択されていません。',
                'must-select-a-mass-action-option' => '一括操作のオプションを選択してください。',
                'must-select-a-mass-action'        => '一括操作を選択してください。',
            ],

            'toolbar' => [
                'length-of' => ':length 件中',
                'of'        => '/',
                'per-page'  => '1ページあたり',
                'results'   => ':total 件の結果',
                'delete'    => '削除',
                'selected'  => ':total 件選択',

                'mass-actions' => [
                    'submit'        => '送信',
                    'select-option' => 'オプションを選択',
                    'select-action' => 'アクションを選択',
                ],
            ],

            'filters' => [
                'select' => '選択',
                'title'  => 'フィルター',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => '少なくとも2文字入力してください...',
                        'no-results'         => '結果が見つかりません...',
                    ],
                ],
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => '同意する',
                'disagree-btn' => '同意しない',
                'message'      => 'この操作を実行してもよろしいですか？',
                'title'        => '確認',
            ],
        ],

        'flash-group' => [
            'success' => '成功',
            'error'   => 'エラー',
            'warning' => '警告',
            'info'    => '情報',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => '見積もり',
            'create-btn'     => '見積もりを作成',
            'create-success' => '見積もりが正常に作成されました。',
            'update-success' => '見積もりが正常に更新されました。',
            'delete-success' => '見積もりが正常に削除されました。',
            'delete-failed'  => '見積もりを削除できません。',

            'datagrid' => [
                'subject'        => '件名',
                'sales-person'   => '営業担当者',
                'expired-at'     => '有効期限',
                'created-at'     => '作成日',
                'expired-quotes' => '期限切れの見積もり',
                'person'         => '顧客',
                'subtotal'       => '小計',
                'discount'       => '割引',
                'tax'            => '税金',
                'adjustment'     => '調整額',
                'grand-total'    => '合計金額',
                'edit'           => '編集',
                'delete'         => '削除',
                'print'          => '印刷',
            ],

            'pdf' => [
                'title'            => '見積もり',
                'grand-total'      => '合計金額',
                'adjustment'       => '調整額',
                'discount'         => '割引',
                'tax'              => '税金',
                'sub-total'        => '小計',
                'amount'           => '金額',
                'quantity'         => '数量',
                'price'            => '単価',
                'product-name'     => '商品名',
                'sku'              => 'SKU',
                'shipping-address' => '配送先住所',
                'billing-address'  => '請求先住所',
                'expired-at'       => '有効期限',
                'sales-person'     => '営業担当者',
                'date'             => '日付',
                'quote-id'         => '見積もりID',
            ],
        ],

        'create' => [
            'title'             => '見積もりを作成',
            'save-btn'          => '見積もりを保存',
            'quote-info'        => '見積もり情報',
            'quote-info-info'   => '見積もりの基本情報を入力してください。',
            'address-info'      => '住所情報',
            'address-info-info' => '見積もりに関連する住所の情報を入力してください。',
            'quote-items'       => '見積もり項目',
            'search-products'   => '商品を検索',
            'link-to-lead'      => 'リードに関連付け',
            'quote-item-info'   => 'この見積もりに追加する商品を選択してください。',
            'quote-name'        => '見積もり名',
            'quantity'          => '数量',
            'price'             => '単価',
            'discount'          => '割引',
            'tax'               => '税金',
            'total'             => '合計',
            'amount'            => '金額',
            'add-item'          => '+ 項目を追加',
            'sub-total'         => '小計 (:symbol)',
            'total-discount'    => '割引 (:symbol)',
            'total-tax'         => '税金 (:symbol)',
            'total-adjustment'  => '調整額 (:symbol)',
            'grand-total'       => '合計金額 (:symbol)',
            'discount-amount'   => '割引額',
            'tax-amount'        => '税額',
            'adjustment-amount' => '調整額',
            'product-name'      => '商品名',
            'action'            => '操作',
        ],

        'edit' => [
            'title'             => '見積もりを編集',
            'save-btn'          => '見積もりを保存',
            'quote-info'        => '見積もり情報',
            'quote-info-info'   => '見積もりの基本情報を入力してください。',
            'address-info'      => '住所情報',
            'address-info-info' => '見積もりに関連する住所の情報を入力してください。',
            'quote-items'       => '見積もり項目',
            'link-to-lead'      => 'リードに関連付け',
            'quote-item-info'   => 'この見積もりに追加する商品を選択してください。',
            'quote-name'        => '見積もり名',
            'quantity'          => '数量',
            'price'             => '単価',
            'search-products'   => '商品を検索',
            'discount'          => '割引',
            'tax'               => '税金',
            'total'             => '合計',
            'amount'            => '金額',
            'add-item'          => '+ 項目を追加',
            'sub-total'         => '小計 (:symbol)',
            'total-discount'    => '割引 (:symbol)',
            'total-tax'         => '税金 (:symbol)',
            'total-adjustment'  => '調整額 (:symbol)',
            'grand-total'       => '合計金額 (:symbol)',
            'discount-amount'   => '割引額',
            'tax-amount'        => '税額',
            'adjustment-amount' => '調整額',
            'product-name'      => '商品名',
            'action'            => '操作',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => '人物',
                'create-btn'     => '人物を作成',
                'create-success' => '人物が正常に作成されました。',
                'update-success' => '人物が正常に更新されました。',
                'delete-success' => '人物が正常に削除されました。',
                'delete-failed'  => '人物を削除できません。',

                'datagrid' => [
                    'contact-numbers'   => '連絡先番号',
                    'delete'            => '削除',
                    'edit'              => '編集',
                    'emails'            => 'メールアドレス',
                    'id'                => 'ID',
                    'view'              => '表示',
                    'name'              => '名前',
                    'organization-name' => '組織名',
                ],
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => '組織',
                'create-btn'     => '組織を作成',
                'create-success' => '組織が正常に作成されました。',
                'update-success' => '組織が正常に更新されました。',
                'delete-success' => '組織が正常に削除されました。',
                'delete-failed'  => '組織を削除できません。',

                'datagrid' => [
                    'delete'        => '削除',
                    'edit'          => '編集',
                    'id'            => 'ID',
                    'name'          => '名前',
                    'persons-count' => '人物数',
                ],
            ],
        ],
    ],


    'products' => [
        'index' => [
            'title'          => '製品',
            'create-btn'     => '製品を作成',
            'create-success' => '製品が正常に作成されました。',
            'update-success' => '製品が正常に更新されました。',
            'delete-success' => '製品が正常に削除されました。',
            'delete-failed'  => '製品を削除できません。',

            'datagrid' => [
                'allocated' => '割り当て済み',
                'delete'    => '削除',
                'edit'      => '編集',
                'id'        => 'ID',
                'in-stock'  => '在庫あり',
                'name'      => '名前',
                'on-hand'   => '手持ち在庫',
                'price'     => '価格',
                'sku'       => 'SKU',
                'view'      => '表示',
            ],
        ],

        'create' => [
            'save-btn'  => '製品を保存',
            'title'     => '製品を作成',
            'general'   => '一般情報',
            'price'     => '価格',
        ],

        'edit' => [
            'title'     => '製品を編集',
            'save-btn'  => '製品を保存',
            'general'   => '一般情報',
            'price'     => '価格',
        ],

        'view' => [
            'sku'         => 'SKU',
            'all'         => 'すべて',
            'notes'       => 'ノート',
            'files'       => 'ファイル',
            'inventories' => '在庫',
            'change-logs' => '変更履歴',

            'attributes' => [
                'about-product' => '製品について',
            ],

            'inventory' => [
                'source'     => '供給元',
                'in-stock'   => '在庫あり',
                'allocated'  => '割り当て済み',
                'on-hand'    => '手持ち在庫',
                'actions'    => 'アクション',
                'assign'     => '割り当て',
                'add-source' => '供給元を追加',
                'location'   => '場所',
                'add-more'   => 'さらに追加',
                'save'       => '保存',
            ],
        ],
    ],

    'settings' => [
        'title' => '設定',

        'groups' => [
            'index' => [
                'create-btn'        => 'グループを作成',
                'title'             => 'グループ',
                'create-success'    => 'グループが正常に作成されました。',
                'update-success'    => 'グループが正常に更新されました。',
                'destroy-success'   => 'グループが正常に削除されました。',
                'delete-failed'     => 'グループを削除できません。',

                'datagrid' => [
                    'delete'      => '削除',
                    'description' => '説明',
                    'edit'        => '編集',
                    'id'          => 'ID',
                    'name'        => '名前',
                ],

                'edit' => [
                    'title' => 'グループを編集',
                ],

                'create' => [
                    'name'        => '名前',
                    'title'       => 'グループを作成',
                    'description' => '説明',
                    'save-btn'    => 'グループを保存',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'この役割は現在使用されているため、削除できません。',
                'create-btn'                => '役割を作成',
                'create-success'            => '役割が正常に作成されました。',
                'current-role-delete-error' => '現在のユーザーに割り当てられている役割は削除できません。',
                'delete-failed'             => '役割を削除できません。',
                'delete-success'            => '役割が正常に削除されました。',
                'last-delete-error'         => '少なくとも1つの役割が必要です。',
                'settings'                  => '設定',
                'title'                     => '役割',
                'update-success'            => '役割が正常に更新されました。',
                'user-define-error'         => 'システム役割は削除できません。',

                'datagrid' => [
                    'all'             => 'すべて',
                    'custom'          => 'カスタム',
                    'delete'          => '削除',
                    'description'     => '説明',
                    'edit'            => '編集',
                    'id'              => 'ID',
                    'name'            => '名前',
                    'permission-type' => '権限タイプ',
                ],
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'タイプを作成',
                'create-success' => 'タイプが正常に作成されました。',
                'delete-failed'  => 'タイプを削除できません。',
                'delete-success' => 'タイプが正常に削除されました。',
                'title'          => 'タイプ',
                'update-success' => 'タイプが正常に更新されました。',

                'datagrid' => [
                    'delete'      => '削除',
                    'description' => '説明',
                    'edit'        => '編集',
                    'id'          => 'ID',
                    'name'        => '名前',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'ソースを作成',
                'create-success' => 'ソースが正常に作成されました。',
                'delete-failed'  => 'ソースを削除できません。',
                'delete-success' => 'ソースが正常に削除されました。',
                'title'          => 'ソース',
                'update-success' => 'ソースが正常に更新されました。',

                'datagrid' => [
                    'delete' => '削除',
                    'edit'   => '編集',
                    'id'     => 'ID',
                    'name'   => '名前',
                ],
            ],
        ],
    ],

    'webhooks' => [
        'index' => [
            'title'          => 'Webhook',
            'create-btn'     => 'Webhookを作成',
            'create-success' => 'Webhookが正常に作成されました。',
            'update-success' => 'Webhookが正常に更新されました。',
            'delete-success' => 'Webhookが正常に削除されました。',
            'delete-failed'  => 'Webhookを削除できません。',

            'datagrid' => [
                'id'          => 'ID',
                'delete'      => '削除',
                'edit'        => '編集',
                'name'        => '名前',
                'entity-type' => 'エンティティタイプ',
                'end-point'   => 'エンドポイント',
            ],
        ],
    ],

    'users' => [
        'index' => [
            'create-btn'          => 'ユーザーを作成',
            'create-success'      => 'ユーザーが正常に作成されました。',
            'delete-failed'       => 'ユーザーを削除できません。',
            'delete-success'      => 'ユーザーが正常に削除されました。',
            'update-success'      => 'ユーザーが正常に更新されました。',
            'title'               => 'ユーザー',

            'datagrid' => [
                'active'        => 'アクティブ',
                'created-at'    => '作成日',
                'delete'        => '削除',
                'edit'          => '編集',
                'email'         => 'メールアドレス',
                'id'            => 'ID',
                'inactive'      => '非アクティブ',
                'name'          => '名前',
                'status'        => 'ステータス',
            ],
        ],
    ],



    'activities' => [
        'index' => [
            'title' => 'アクティビティ',

            'datagrid' => [
                'comment'       => 'コメント',
                'created_at'    => '作成日',
                'created_by'    => '作成者',
                'edit'          => '編集',
                'id'            => 'ID',
                'done'          => '完了',
                'not-done'      => '未完了',
                'lead'          => 'リード',
                'mass-delete'   => '一括削除',
                'mass-update'   => '一括更新',
                'schedule-from' => '開始日時',
                'schedule-to'   => '終了日時',
                'title'         => 'タイトル',
                'is_done'       => '完了状況',
                'type'          => 'タイプ',
                'update'        => '更新',
                'call'          => '通話',
                'meeting'       => '会議',
                'lunch'         => 'ランチ',
            ],
        ],

        'edit' => [
            'title'           => 'アクティビティを編集',
            'back-btn'        => '戻る',
            'save-btn'        => 'アクティビティを保存',
            'type'            => 'アクティビティタイプ',
            'call'            => '通話',
            'meeting'         => '会議',
            'lunch'           => 'ランチ',
            'schedule_to'     => '終了日時',
            'schedule_from'   => '開始日時',
            'location'        => '場所',
            'comment'         => 'コメント',
            'lead'            => 'リード',
            'participants'    => '参加者',
            'general'         => '一般情報',
            'persons'         => '人物',
            'no-result-found' => 'データが見つかりません。',
            'users'           => 'ユーザー',
        ],

        'updated'              => ':attribute を更新しました。',
        'created'              => '作成済み',
        'duration-overlapping' => '参加者がこの時間に別の会議を予定しています。続行しますか？',
        'create-success'       => 'アクティビティが正常に作成されました。',
        'update-success'       => 'アクティビティが正常に更新されました。',
        'overlapping-error'    => '参加者がこの時間に別の会議を予定しています。',
        'destroy-success'      => 'アクティビティが正常に削除されました。',
        'delete-failed'        => 'アクティビティを削除できません。',
        'mass-update-success'  => 'アクティビティが正常に更新されました。',
        'mass-destroy-success' => 'アクティビティが正常に削除されました。',
        'mass-delete-failed'   => 'アクティビティを削除できません。',
    ],

    'mail' => [
        'index' => [
            'compose'           => '作成',
            'draft'             => '下書き',
            'inbox'             => '受信トレイ',
            'outbox'            => '送信トレイ',
            'sent'              => '送信済み',
            'trash'             => 'ゴミ箱',
            'compose-mail-btn'  => 'メール作成',
            'btn'               => 'メール',
            
            'mail' => [
                'title'         => 'メール作成',
                'to'            => '宛先',
                'enter-emails'  => 'Enterキーでメールアドレスを追加',
                'cc'            => 'CC',
                'bcc'           => 'BCC',
                'subject'       => '件名',
                'send-btn'      => '送信',
                'message'       => 'メッセージ',
                'draft'         => '下書き',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => '送信元',
                'to'            => '宛先',
                'subject'       => '件名',
                'tag-name'      => 'タグ名',
                'created-at'    => '作成日',
                'move-to-inbox' => '受信トレイへ移動',
                'edit'          => '編集',
                'view'          => '表示',
                'delete'        => '削除',
            ],
        ],

        'create-success'      => 'メールが正常に送信されました。',
        'update-success'      => 'メールが正常に更新されました。',
        'mass-update-success' => 'メールが正常に更新されました。',
        'delete-success'      => 'メールが正常に削除されました。',
        'delete-failed'       => 'メールを削除できません。',

        'view' => [
            'title'                      => 'メール',
            'subject'                    => ':subject',
            'link-mail'                  => 'メールをリンク',
            'to'                         => '宛先',
            'cc'                         => 'CC',
            'bcc'                        => 'BCC',
            'reply'                      => '返信',
            'reply-all'                  => '全員に返信',
            'forward'                    => '転送',
            'delete'                     => '削除',
            'enter-mails'                => 'メールアドレスを入力',
            'rotten-days'                => 'リードが :days 日間放置されています。',
            'search-an-existing-lead'    => '既存のリードを検索',
            'search-an-existing-contact' => '既存の連絡先を検索',
            'message'                    => 'メッセージ',
            'add-attachments'            => '添付ファイルを追加',
            'discard'                    => '破棄',
            'send'                       => '送信',
            'no-result-found'            => '結果が見つかりません',
            'add-new-contact'            => '新しい連絡先を追加',
            'description'                => '説明',
            'search'                     => '検索...',
            'add-new-lead'               => '新しいリードを追加',
            'create-new-contact'         => '新しい連絡先を作成',
            'save-contact'               => '連絡先を保存',
            'create-lead'                => 'リードを作成',
            'linked-contact'             => 'リンクされた連絡先',
            'link-to-contact'            => '連絡先にリンク',
            'link-to-lead'               => 'リードにリンク',
            'linked-lead'                => 'リンクされたリード',
            'lead-details'               => 'リードの詳細',
            'contact-person'             => '担当者',
            'product'                    => '製品',

            'tags' => [
                'create-success'  => 'タグが正常に作成されました。',
                'destroy-success' => 'タグが正常に削除されました。',
            ],
        ],
    ],


    'common' => [
        'custom-attributes' => [
            'select-country' => '国を選択',
            'select-state'   => '都道府県を選択',
            'state'          => '都道府県',
            'city'           => '市区町村',
            'postcode'       => '郵便番号',
            'work'           => '勤務先',
            'home'           => '自宅',
            'add-more'       => 'さらに追加',
            'select'         => '選択',
            'country'        => '国',
            'address'        => '住所',
        ],
    ],

    'leads' => [
        'create-success'    => 'リードが正常に作成されました。',
        'update-success'    => 'リードが正常に更新されました。',
        'update-failed'     => 'リードを更新できません。',
        'destroy-success'   => 'リードが正常に削除されました。',
        'destroy-failed'    => 'リードを削除できません。',

        'index' => [
            'title'      => 'リード',
            'create-btn' => 'リードを作成',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => '営業担当者',
                'subject'             => '件名',
                'source'              => 'ソース',
                'lead-value'          => 'リード価値',
                'lead-type'           => 'リードタイプ',
                'tag-name'            => 'タグ名',
                'contact-person'      => '担当者',
                'stage'               => 'ステージ',
                'rotten-lead'         => '放置リード',
                'expected-close-date' => '予想終了日',
                'created-at'          => '作成日',
                'no'                  => 'いいえ',
                'yes'                 => 'はい',
                'delete'              => '削除',
                'mass-delete'         => '一括削除',
                'mass-update'         => '一括更新',
            ],

            'kanban' => [
                'rotten-days'            => 'このリードは :days 日間放置されています。',
                'empty-list'             => 'リード一覧が空です',
                'empty-list-description' => '目標を整理するためにリードを作成しましょう。',
                'create-lead-btn'        => 'リードを作成',

                'columns' => [
                    'contact-person'      => '担当者',
                    'id'                  => 'ID',
                    'lead-type'           => 'リードタイプ',
                    'lead-value'          => 'リード価値',
                    'sales-person'        => '営業担当者',
                    'source'              => 'ソース',
                    'title'               => 'タイトル',
                    'tags'                => 'タグ',
                    'expected-close-date' => '予想終了日',
                    'created-at'          => '作成日',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => '検索',
                    ],

                    'filters' => [
                        'apply-filters' => 'フィルターを適用',
                        'clear-all'     => 'すべてクリア',
                        'filter'        => 'フィルター',
                        'filters'       => 'フィルター',
                        'select'        => '選択',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'すべてのパイプライン',
                'create-new-pipeline' => '新しいパイプラインを作成',
            ],
        ],

        'create' => [
            'title'          => 'リードを作成',
            'save-btn'       => '保存',
            'details'        => '詳細',
            'details-info'   => 'リードの基本情報を入力してください。',
            'contact-person' => '担当者',
            'contact-info'   => '担当者に関する情報',
            'products'       => '製品',
            'products-info'  => '製品に関する情報',
        ],

        'edit' => [
            'title'          => 'リードを編集',
            'save-btn'       => '保存',
            'details'        => '詳細',
            'details-info'   => 'リードの基本情報を入力してください。',
            'contact-person' => '担当者',
            'contact-info'   => '担当者に関する情報',
            'products'       => '製品',
            'products-info'  => '製品に関する情報',
        ],

        'common' => [
            'contact' => [
                'name'           => '名前',
                'email'          => 'メールアドレス',
                'contact-number' => '電話番号',
                'organization'   => '組織',
            ],

            'products' => [
                'product-name' => '製品名',
                'quantity'     => '数量',
                'price'        => '価格',
                'amount'       => '金額',
                'action'       => '操作',
                'add-more'     => 'さらに追加',
                'total'        => '合計',
            ],
        ],

        'view' => [
            'title'       => 'リード: :title',
            'rotten-days' => ':days 日間',

            'tabs' => [
                'description' => '説明',
                'products'    => '製品',
                'quotes'      => '見積もり',
            ],

            'attributes' => [
                'title' => 'リードについて',
            ],

            'quotes'=> [
                'subject'         => '件名',
                'expired-at'      => '有効期限',
                'sub-total'       => '小計',
                'discount'        => '割引',
                'tax'             => '税金',
                'adjustment'      => '調整額',
                'grand-total'     => '合計金額',
                'delete'          => '削除',
                'edit'            => '編集',
                'download'        => 'ダウンロード',
                'destroy-success' => '見積もりが正常に削除されました。',
                'empty-title'     => '見積もりが見つかりません',
                'empty-info'      => 'このリードには見積もりがありません。',
                'add-btn'         => '見積もりを追加',
            ],

            'products' => [
                'product-name' => '製品名',
                'quantity'     => '数量',
                'price'        => '価格',
                'amount'       => '金額',
                'action'       => '操作',
                'add-more'     => 'さらに追加',
                'total'        => '合計',
                'empty-title'  => '製品が見つかりません',
                'empty-info'   => 'このリードには製品がありません。',
                'add-product'  => '製品を追加',
            ],

            'persons' => [
                'title'     => '担当者について',
                'job-title' => ':organization の :job_title',
            ],

            'stages' => [
                'won-lost'       => '受注/失注',
                'won'            => '受注',
                'lost'           => '失注',
                'need-more-info' => '詳細情報が必要',
                'closed-at'      => 'クローズ日',
                'won-value'      => '受注金額',
                'lost-reason'    => '失注理由',
                'save-btn'       => '保存',
            ],

            'tags' => [
                'create-success'  => 'タグが正常に作成されました。',
                'destroy-success' => 'タグが正常に削除されました。',
            ],
        ],
    ],


    'configuration' => [
        'index' => [
            'back'         => '戻る',
            'save-btn'     => '設定を保存',
            'save-success' => '設定が正常に保存されました。',
            'search'       => '検索',
            'title'        => '設定',

            'general' => [
                'title'  => '一般設定',
                'info'   => '一般設定の管理',

                'general' => [
                    'title'           => '一般設定',
                    'info'            => 'ここで一般設定を更新できます。',
                    'locale-settings' => [
                        'title'      => 'ロケール設定',
                        'title-info' => 'ユーザーインターフェースで使用する言語を定義します。例: 日本語(ja), 英語(en), スペイン語(es), アラビア語(ar), ペルシャ語(fa), トルコ語(tr)など。',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'ダッシュボード',

            'revenue' => [
                'lost-revenue' => '失われた収益',
                'won-revenue'  => '獲得した収益',
            ],

            'over-all' => [
                'average-lead-value'    => '平均リード価値',
                'total-leads'           => '総リード数',
                'average-leads-per-day' => '1日あたりの平均リード数',
                'total-quotations'      => '総見積もり数',
                'total-persons'         => '総人物数',
                'total-organizations'   => '総組織数',
            ],

            'total-leads' => [
                'title' => 'リード',
                'total' => '総リード数',
                'won'   => '獲得リード',
                'lost'  => '失われたリード',
            ],

            'revenue-by-sources' => [
                'title'       => '収益ソース別',
                'empty-title' => 'データがありません',
                'empty-info'  => '選択された期間のデータがありません。',
            ],

            'revenue-by-types' => [
                'title'       => '収益タイプ別',
                'empty-title' => 'データがありません',
                'empty-info'  => '選択された期間のデータがありません。',
            ],

            'top-selling-products' => [
                'title'       => '売上トップ製品',
                'empty-title' => '製品が見つかりません',
                'empty-info'  => '選択された期間の製品データがありません。',
            ],

            'top-persons' => [
                'title'       => 'トップ担当者',
                'empty-title' => '担当者が見つかりません',
                'empty-info'  => '選択された期間の担当者データがありません。',
            ],

            'open-leads-by-states' => [
                'title'       => '都道府県別オープンリード',
                'empty-title' => 'データがありません',
                'empty-info'  => '選択された期間のデータがありません。',
            ],
        ],
    ],


    'layouts' => [
        'app-version'          => 'バージョン: :version',
        'dashboard'            => 'ダッシュボード',
        'leads'                => 'リード',
        'quotes'               => '見積もり',
        'quote'                => '見積もり',
        'mail'                 => [
            'title'   => 'メール',
            'compose' => '作成',
            'inbox'   => '受信トレイ',
            'draft'   => '下書き',
            'outbox'  => '送信トレイ',
            'sent'    => '送信済み',
            'trash'   => 'ゴミ箱',
            'setting' => '設定',
        ],
        'activities'           => 'アクティビティ',
        'contacts'             => '連絡先',
        'persons'              => '人物',
        'person'               => '人物',
        'organizations'        => '組織',
        'organization'         => '組織',
        'products'             => '製品',
        'product'              => '製品',
        'settings'             => '設定',
        'user'                 => 'ユーザー',
        'user-info'            => 'CRM内のすべてのユーザーとその権限を管理します。',
        'groups'               => 'グループ',
        'groups-info'          => 'CRMのグループを追加、編集、削除します。',
        'roles'                => '役割',
        'role'                 => '役割',
        'roles-info'           => 'CRMの役割を追加、編集、削除します。',
        'users'                => 'ユーザー',
        'users-info'           => 'CRMのユーザーを追加、編集、削除します。',
        'lead'                 => 'リード',
        'lead-info'            => 'CRM内のリードに関連する設定を管理します。',
        'pipelines'            => 'パイプライン',
        'pipelines-info'       => 'CRMのパイプラインを追加、編集、削除します。',
        'sources'              => 'ソース',
        'sources-info'         => 'CRMのソースを追加、編集、削除します。',
        'types'                => 'タイプ',
        'types-info'           => 'CRMのタイプを追加、編集、削除します。',
        'automation'           => '自動化',
        'automation-info'      => 'CRMの自動化設定を管理します。',
        'attributes'           => '属性',
        'attribute'            => '属性',
        'attributes-info'      => 'CRMの属性を追加、編集、削除します。',
        'email-templates'      => 'メールテンプレート',
        'email'                => 'メール',
        'email-templates-info' => 'CRMのメールテンプレートを追加、編集、削除します。',
        'workflows'            => 'ワークフロー',
        'workflows-info'       => 'CRMのワークフローを追加、編集、削除します。',
        'webhooks'             => 'Webhooks',
        'webhooks-info'        => 'CRMのWebhooksを追加、編集、削除します。',
        'other-settings'       => 'その他の設定',
        'other-settings-info'  => 'CRMの追加設定を管理します。',
        'tags'                 => 'タグ',
        'tags-info'            => 'CRMのタグを追加、編集、削除します。',
        'my-account'           => 'マイアカウント',
        'sign-out'             => 'サインアウト',
        'back'                 => '戻る',
        'name'                 => '名前',
        'configuration'        => '設定',
        'activities'           => 'アクティビティ',
        'howdy'                => 'こんにちは！',
        'warehouses'           => '倉庫',
        'warehouse'            => '倉庫',
        'warehouses-info'      => 'CRMの倉庫を追加、編集、削除します。',
    ],

    'user' => [
        'account' => [
            'name'                  => '名前',
            'email'                 => 'メールアドレス',
            'password'              => 'パスワード',
            'my_account'            => 'マイアカウント',
            'update_details'        => '詳細を更新',
            'current_password'      => '現在のパスワード',
            'confirm_password'      => 'パスワードの確認',
            'password-match'        => '現在のパスワードが一致しません。',
            'account-save'          => 'アカウントの変更が正常に保存されました。',
            'permission-denied'     => 'アクセス権がありません。',
            'remove-image'          => '画像を削除',
            'upload_image_pix'      => 'プロフィール画像をアップロード（100px × 100px）',
            'upload_image_format'   => 'PNGまたはJPG形式',
            'image_upload_message'  => '画像ファイル（.jpeg, .jpg, .png のみ）が許可されています。',
        ],
    ],


    'emails' => [
        'common' => [
            'dear'   => '親愛なる :name 様',
            'cheers' => 'よろしくお願いいたします。</br>:app_name チーム',

            'user'   => [
                'dear'           => '親愛なる :username 様',
                'create-subject' => 'メンバーとして追加されました。',
                'create-body'    => 'おめでとうございます！あなたは私たちのチームのメンバーになりました。',

                'forget-password' => [
                    'subject'           => 'パスワードリセットのご案内',
                    'dear'              => '親愛なる :username 様',
                    'reset-password'    => 'パスワードをリセット',
                    'info'              => 'このメールは、アカウントのパスワードリセットリクエストを受信したため送信されました。',
                    'final-summary'     => 'もしパスワードのリセットをリクエストしていない場合は、特に対応する必要はありません。',
                    'thanks'            => 'ありがとうございます！',
                ],
            ],
        ],
    ],

    'errors' => [
        'dashboard' => 'ダッシュボード',
        'go-back'   => '戻る',
        'support'   => '問題が解決しない場合は、<a href=":link" class=":class">:email</a> までお問い合わせください。',

        '404' => [
            'description' => 'お探しのページは見つかりませんでした。申し訳ございませんが、ページが存在しないか、一時的に利用できなくなっています。',
            'title'       => '404 ページが見つかりません',
        ],

        '401' => [
            'description' => 'このページにアクセスする権限がありません。必要な認証情報が不足している可能性があります。',
            'title'       => '401 認証エラー',
        ],

        '403' => [
            'description' => 'このページにはアクセスできません。必要な権限が不足している可能性があります。',
            'title'       => '403 アクセス禁止',
        ],

        '500' => [
            'description' => '予期しないエラーが発生しました。ページの読み込み中に問題が発生したようです。',
            'title'       => '500 内部サーバーエラー',
        ],

        '503' => [
            'description' => '現在メンテナンス中です。しばらく経ってから再度アクセスしてください。',
            'title'       => '503 サービス利用不可',
        ],
    ],

];
