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
                'email'           => '登録済みメール',
                'email-not-exist' => 'このメールアドレスは登録されていません。',
                'page-title'      => 'パスワードを忘れた場合',
                'reset-link-sent' => 'パスワードリセットリンクが送信されました。',
                'sign-in-link'    => 'サインインに戻る',
                'submit-btn'      => 'リセット',
                'title'           => 'パスワードを回復する',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'サインインに戻る',
            'confirm-password' => 'パスワードを確認',
            'email'            => '登録済みメール',
            'password'         => 'パスワード',
            'submit-btn'       => 'パスワードをリセット',
            'title'            => 'パスワードをリセット',
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
                    'title'        => 'メールを作成',
                    'to'           => '宛先',
                    'enter-emails' => 'Enterキーを押してメールアドレスを追加',
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
                'from'         => '開始',
                'to'           => '終了',
                'cc'           => 'CC',
                'bcc'          => 'BCC',
                'all'          => 'すべて',
                'planned'      => '予定',
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
                        'title'       => 'アクティビティが見つかりません',
                        'description' => 'アクティビティがありません。左側のパネルのボタンをクリックして追加できます。',
                    ],

                    'planned' => [
                        'title'       => '予定されたアクティビティが見つかりません',
                        'description' => '予定されたアクティビティがありません。左側のパネルのボタンをクリックして追加できます。',
                    ],

                    'notes' => [
                        'title'       => 'ノートが見つかりません',
                        'description' => 'ノートがありません。左側のパネルのボタンをクリックして追加できます。',
                    ],

                    'calls' => [
                        'title'       => '通話履歴が見つかりません',
                        'description' => '通話履歴がありません。左側のパネルのボタンをクリックして追加できます。',
                    ],

                    'meetings' => [
                        'title'       => '会議が見つかりません',
                        'description' => '会議がありません。左側のパネルのボタンをクリックして追加できます。',
                    ],

                    'lunches' => [
                        'title'       => 'ランチの予定が見つかりません',
                        'description' => 'ランチの予定がありません。左側のパネルのボタンをクリックして追加できます。',
                    ],

                    'files' => [
                        'title'       => 'ファイルが見つかりません',
                        'description' => 'ファイルがありません。左側のパネルのボタンをクリックして追加できます。',
                    ],

                    'emails' => [
                        'title'       => 'メールが見つかりません',
                        'description' => 'メールがありません。左側のパネルのボタンをクリックして追加できます。',
                    ],

                    'system' => [
                        'title'       => '変更履歴が見つかりません',
                        'description' => '変更履歴がありません。',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => '画像を追加',
                'ai-add-image-btn'  => 'マジックAI',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => '画像ファイル（.jpeg, .jpg, .png のみ）が許可されています。',

                'placeholders' => [
                    'front'     => '前面',
                    'next'      => '次へ',
                    'size'      => 'サイズ',
                    'use-cases' => '使用例',
                    'zoom'      => 'ズーム',
                ],
            ],

            'videos' => [
                'add-video-btn'     => '動画を追加',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => '動画ファイル（.mp4, .mov, .ogg のみ）が許可されています。',
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

                'filter' => [
                    'apply-filters-btn' => 'フィルターを適用',
                    'back-btn'          => '戻る',
                    'create-new-filter' => '新しいフィルターを作成',
                    'custom-filters'    => 'カスタムフィルター',
                    'delete-success'    => 'フィルターが削除されました。',
                    'empty-title'       => 'フィルターを追加して保存',
                    'save-btn'          => '保存',
                    'save-filter'       => 'フィルターを保存',
                    'saved-success'     => 'フィルターが保存されました。',
                ],

                'search' => [
                    'title' => '検索',
                ],
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => '同意する',
                'disagree-btn' => '同意しない',
                'message'      => 'この操作を実行してもよろしいですか？',
                'title'        => '本当に実行しますか？',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'タグ',
                'added-tags'     => '追加されたタグ',
                'save-btn'       => 'タグを保存',
                'placeholder'    => 'タグを検索するには入力してください',
                'add-tag'        => '「:term」を追加...',
                'aquarelle-red'  => 'アクアレルレッド',
                'crushed-cashew' => 'クラッシュカシュー',
                'beeswax'        => '蜜蝋',
                'lemon-chiffon'  => 'レモンシフォン',
                'snow-flurry'    => 'スノーフルーリー',
                'honeydew'       => 'ハニーデュー',
            ],
        ],

        'layouts' => [
            'powered-by' => [
                'description' => ':krayin によって提供されています。これは :webkul によるオープンソースプロジェクトです。',
            ],

            'header' => [
                'mega-search' => [
                    'title'   => 'メガ検索',

                    'tabs' => [
                        'leads'    => 'リード',
                        'quotes'   => '見積もり',
                        'persons'  => '人物',
                        'products' => '製品',
                    ],

                    'explore-all-products'          => 'すべての製品を表示',
                    'explore-all-leads'             => 'すべてのリードを表示',
                    'explore-all-contacts'          => 'すべての連絡先を表示',
                    'explore-all-quotes'            => 'すべての見積もりを表示',
                    'explore-all-matching-products' => '「:query」に一致する製品をすべて表示 (:count 件)',
                    'explore-all-matching-leads'    => '「:query」に一致するリードをすべて表示 (:count 件)',
                    'explore-all-matching-contacts' => '「:query」に一致する連絡先をすべて表示 (:count 件)',
                    'explore-all-matching-quotes'   => '「:query」に一致する見積もりをすべて表示 (:count 件)',
                ],
            ],
        ],

        'attributes' => [
            'edit'   => [
                'delete' => '削除',
            ],

            'lookup' => [
                'click-to-add'    => 'クリックして追加',
                'search'          => '検索',
                'no-result-found' => '結果が見つかりません',
                'search'          => '検索...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'クリックして追加',
            'no-results'   => '結果が見つかりません',
            'add-as-new'   => '新規として追加',
            'search'       => '検索...',
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
                'expired-quotes' => '期限切れ見積もり',
                'person'         => '担当者',
                'subtotal'       => '小計',
                'discount'       => '割引',
                'tax'            => '税金',
                'adjustment'     => '調整額',
                'grand-total'    => '合計',
                'edit'           => '編集',
                'delete'         => '削除',
                'print'          => '印刷',
            ],

            'pdf' => [
                'title'            => '見積もり',
                'grand-total'      => '合計',
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
            'address-info-info' => '見積もりに関連する住所情報を入力してください。',
            'quote-items'       => '見積もりアイテム',
            'search-products'   => '商品を検索',
            'link-to-lead'      => 'リードにリンク',
            'quote-item-info'   => 'この見積もりに追加する商品を選択してください。',
            'quote-name'        => '見積もり名',
            'quantity'          => '数量',
            'price'             => '単価',
            'discount'          => '割引',
            'tax'               => '税金',
            'total'             => '合計',
            'amount'            => '金額',
            'add-item'          => 'アイテムを追加',
            'sub-total'         => '小計 (:symbol)',
            'total-discount'    => '割引 (:symbol)',
            'total-tax'         => '税金 (:symbol)',
            'total-adjustment'  => '調整額 (:symbol)',
            'grand-total'       => '合計 (:symbol)',
            'discount-amount'   => '割引額',
            'tax-amount'        => '税額',
            'adjustment-amount' => '調整額',
            'product-name'      => '商品名',
            'action'            => 'アクション',
        ],

        'edit' => [
            'title'             => '見積もりを編集',
            'save-btn'          => '見積もりを保存',
            'quote-info'        => '見積もり情報',
            'quote-info-info'   => '見積もりの基本情報を編集してください。',
            'address-info'      => '住所情報',
            'address-info-info' => '見積もりに関連する住所情報を編集してください。',
            'quote-items'       => '見積もりアイテム',
            'link-to-lead'      => 'リードにリンク',
            'quote-item-info'   => 'この見積もりに追加する商品を選択してください。',
            'quote-name'        => '見積もり名',
            'quantity'          => '数量',
            'price'             => '単価',
            'search-products'   => '商品を検索',
            'discount'          => '割引',
            'tax'               => '税金',
            'total'             => '合計',
            'amount'            => '金額',
            'add-item'          => 'アイテムを追加',
            'sub-total'         => '小計 (:symbol)',
            'total-discount'    => '割引 (:symbol)',
            'total-tax'         => '税金 (:symbol)',
            'total-adjustment'  => '調整額 (:symbol)',
            'grand-total'       => '合計 (:symbol)',
            'discount-amount'   => '割引額',
            'tax-amount'        => '税額',
            'adjustment-amount' => '調整額',
            'product-name'      => '商品名',
            'action'            => 'アクション',
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
                    'emails'            => 'メール',
                    'id'                => 'ID',
                    'view'              => '表示',
                    'name'              => '名前',
                    'organization-name' => '組織名',
                ],
            ],

            'view' => [
                'title'              => ':name',
                'about-person'       => '人物について',
                'about-organization' => '組織について',

                'activities' => [
                    'index' => [
                        'all'          => 'すべて',
                        'calls'        => '通話',
                        'meetings'     => '会議',
                        'lunches'      => 'ランチ',
                        'files'        => 'ファイル',
                        'quotes'       => '見積もり',
                        'notes'        => 'ノート',
                        'emails'       => 'メール',
                        'by-user'      => ':user による',
                        'scheduled-on' => 'スケジュール日時',
                        'location'     => '場所',
                        'participants' => '参加者',
                        'mark-as-done' => '完了としてマーク',
                        'delete'       => '削除',
                        'edit'         => '編集',
                    ],
                ],
            ],

            'create' => [
                'title'    => '人物を作成',
                'save-btn' => '人物を保存',
            ],

            'edit' => [
                'title'    => '人物を編集',
                'save-btn' => '人物を保存',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => '製品',
            'create-btn'     => 'Create Product',
            'create-success' => 'Product created successfully.',
            'update-success' => 'Product updated successfully.',
            'delete-success' => 'Product deleted successfully.',
            'delete-failed'  => 'Product can not be deleted.',

            'datagrid'   => [
                'allocated' => 'Allocated',
                'delete'    => '削除',
                'edit'      => '編集',
                'id'        => 'ID',
                'in-stock'  => 'In Stock',
                'name'      => 'Name',
                'on-hand'   => 'On Hand',
                'price'     => 'Price',
                'sku'       => 'SKU',
                'view'      => '表示',
            ],
        ],

        'create' => [
            'save-btn'  => 'Save Products',
            'title'     => 'Create Products',
            'general'   => 'General',
            'price'     => 'Price',
        ],

        'edit' => [
            'title'     => 'Edit Products',
            'save-btn'  => 'Save Products',
            'general'   => 'General',
            'price'     => 'Price',
        ],

        'view' => [
            'sku'         => 'SKU',
            'all'         => 'All',
            'notes'       => 'Notes',
            'files'       => 'Files',
            'inventories' => 'Inventory',
            'change-logs' => 'Changelogs',

            'attributes' => [
                'about-product' => 'About Product',
            ],

            'inventory' => [
                'source'     => 'Source',
                'in-stock'   => 'In Stock',
                'allocated'  => 'Allocated',
                'on-hand'    => 'On Hand',
                'actions'    => 'アクション',
                'assign'     => 'Assign',
                'add-source' => 'Add Source',
                'location'   => '場所',
                'add-more'   => 'Add More',
                'save'       => 'Save',
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

                'datagrid'   => [
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
                'being-used'                => 'この役割は管理者に使用されているため削除できません。',
                'create-btn'                => '役割を作成',
                'create-success'            => '役割が正常に作成されました。',
                'current-role-delete-error' => '現在のユーザーに割り当てられているため削除できません。',
                'delete-failed'             => '役割を削除できません。',
                'delete-success'            => '役割が正常に削除されました。',
                'last-delete-error'         => '少なくとも1つの役割が必要です。',
                'settings'                  => '設定',
                'title'                     => '役割',
                'update-success'            => '役割が正常に更新されました。',
                'user-define-error'         => 'システムの役割は削除できません。',

                'datagrid'   => [
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

            'create' => [
                'access-control' => 'アクセス制御',
                'all'            => 'すべて',
                'back-btn'       => '戻る',
                'custom'         => 'カスタム',
                'description'    => '説明',
                'general'        => '一般',
                'name'           => '名前',
                'permissions'    => '権限',
                'save-btn'       => '役割を保存',
                'title'          => '役割を作成',
            ],

            'edit' => [
                'access-control' => 'アクセス制御',
                'all'            => 'すべて',
                'back-btn'       => '戻る',
                'custom'         => 'カスタム',
                'description'    => '説明',
                'general'        => '一般',
                'name'           => '名前',
                'permissions'    => '権限',
                'save-btn'       => '役割を保存',
                'title'          => '役割を編集',
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

                'create' => [
                    'name'     => '名前',
                    'save-btn' => 'タイプを保存',
                    'title'    => 'タイプを作成',
                ],

                'edit' => [
                    'title' => 'タイプを編集',
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

                'create' => [
                    'name'     => '名前',
                    'save-btn' => 'ソースを保存',
                    'title'    => 'ソースを作成',
                ],

                'edit' => [
                    'title' => 'ソースを編集',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'ワークフロー',
                'create-btn'     => 'ワークフローを作成',
                'create-success' => 'ワークフローが正常に作成されました。',
                'update-success' => 'ワークフローが正常に更新されました。',
                'delete-success' => 'ワークフローが正常に削除されました。',
                'delete-failed'  => 'ワークフローを削除できません。',
                'datagrid'       => [
                    'delete'      => '削除',
                    'description' => '説明',
                    'edit'        => '編集',
                    'id'          => 'ID',
                    'name'        => '名前',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => '関連するリードを更新',
                'send-email-to-sales-owner'  => '営業担当者にメールを送信',
                'send-email-to-participants' => '参加者にメールを送信',
                'add-webhook'                => 'Webhookを追加',
                'update-lead'                => 'リードを更新',
                'update-person'              => '人物を更新',
                'send-email-to-person'       => '人物にメールを送信',
                'add-tag'                    => 'タグを追加',
                'add-note-as-activity'       => 'アクティビティとしてノートを追加',
                'update-quote'               => '見積もりを更新',
            ],

            'create' => [
                'title'                  => 'ワークフローを作成',
                'event'                  => 'イベント',
                'back-btn'               => '戻る',
                'save-btn'               => 'ワークフローを保存',
                'name'                   => '名前',
                'basic-details'          => '基本情報',
                'description'            => '説明',
                'actions'                => 'アクション',
                'basic-details-info'     => 'ワークフローの基本情報を入力してください。',
                'event-info'             => 'イベントがトリガーされると、条件がチェックされ、定義済みのアクションが実行されます。',
                'conditions'             => '条件',
                'conditions-info'        => '条件は特定の状況でトリガーされるルールです。',
                'actions-info'           => 'アクションを使用すると、作業負担を軽減し、CRMの自動化を容易にできます。',
                'value'                  => '値',
                'condition-type'         => '条件タイプ',
                'all-condition-are-true' => 'すべての条件が真である',
                'any-condition-are-true' => 'いずれかの条件が真である',
                'add-condition'          => '条件を追加',
                'add-action'             => 'アクションを追加',
                'yes'                    => 'はい',
                'no'                     => 'いいえ',
                'email'                  => 'メール',
                'is-equal-to'            => '次と等しい',
                'is-not-equal-to'        => '次と等しくない',
                'equals-or-greater-than' => '次以上である',
                'equals-or-less-than'    => '次以下である',
                'greater-than'           => '次より大きい',
                'less-than'              => '次より小さい',
                'type'                   => 'タイプ',
                'contain'                => '含む',
                'contains'               => '含まれる',
                'does-not-contain'       => '含まれない',
            ],

            'edit' => [
                'title'                  => 'ワークフローを編集',
                'event'                  => 'イベント',
                'back-btn'               => '戻る',
                'save-btn'               => 'ワークフローを保存',
                'name'                   => '名前',
                'basic-details'          => '基本情報',
                'description'            => '説明',
                'actions'                => 'アクション',
                'type'                   => 'タイプ',
                'basic-details-info'     => 'ワークフローの基本情報を入力してください。',
                'event-info'             => 'イベントがトリガーされると、条件がチェックされ、定義済みのアクションが実行されます。',
                'conditions'             => '条件',
                'conditions-info'        => '条件は特定の状況でトリガーされるルールです。',
                'actions-info'           => 'アクションを使用すると、作業負担を軽減し、CRMの自動化を容易にできます。',
                'value'                  => '値',
                'condition-type'         => '条件タイプ',
                'all-condition-are-true' => 'すべての条件が真である',
                'any-condition-are-true' => 'いずれかの条件が真である',
                'add-condition'          => '条件を追加',
                'add-action'             => 'アクションを追加',
                'yes'                    => 'はい',
                'no'                     => 'いいえ',
                'email'                  => 'メール',
                'is-equal-to'            => '次と等しい',
                'is-not-equal-to'        => '次と等しくない',
                'equals-or-greater-than' => '次以上である',
                'equals-or-less-than'    => '次以下である',
                'greater-than'           => '次より大きい',
                'less-than'              => '次より小さい',
                'contain'                => '含む',
                'contains'               => '含まれる',
                'does-not-contain'       => '含まれない',
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'Webフォーム',
                'create-btn'     => 'Webフォームを作成',
                'create-success' => 'Webフォームが正常に作成されました。',
                'update-success' => 'Webフォームが正常に更新されました。',
                'delete-success' => 'Webフォームが正常に削除されました。',
                'delete-failed'  => 'Webフォームを削除できません。',

                'datagrid' => [
                    'id'     => 'ID',
                    'title'  => 'タイトル',
                    'edit'   => '編集',
                    'delete' => '削除',
                ],
            ],

            'create' => [
                'title'                    => 'Webフォームを作成',
                'add-attribute-btn'        => '属性を追加',
                'attribute-label-color'    => '属性ラベルの色',
                'attributes'               => '属性',
                'attributes-info'          => 'フォームにカスタム属性を追加します。',
                'background-color'         => '背景色',
                'create-lead'              => 'リードを作成',
                'customize-webform'        => 'Webフォームをカスタマイズ',
                'customize-webform-info'   => 'Webフォームのデザインをカスタマイズできます。',
                'description'              => '説明',
                'display-custom-message'   => 'カスタムメッセージを表示',
                'form-background-color'    => 'フォームの背景色',
                'form-submit-btn-color'    => '送信ボタンの色',
                'form-title-color'         => 'フォームタイトルの色',
                'general'                  => '一般',
                'leads'                    => 'リード',
                'person'                   => '人物',
                'save-btn'                 => 'Webフォームを保存',
                'submit-button-label'      => '送信ボタンのラベル',
                'submit-success-action'    => '送信後のアクション',
                'redirect-to-url'          => 'URLへリダイレクト',
                'choose-value'             => '値を選択',
                'select-file'              => 'ファイルを選択',
                'select-image'             => '画像を選択',
                'enter-value'              => '値を入力',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'メールテンプレートを作成',
                'title'          => 'メールテンプレート',
                'create-success' => 'メールテンプレートが正常に作成されました。',
                'update-success' => 'メールテンプレートが正常に更新されました。',
                'delete-success' => 'メールテンプレートが正常に削除されました。',
                'delete-failed'  => 'メールテンプレートを削除できません。',

                'datagrid' => [
                    'delete'  => '削除',
                    'edit'    => '編集',
                    'id'      => 'ID',
                    'name'    => '名前',
                    'subject' => '件名',
                ],
            ],

            'create' => [
                'title'                => 'メールテンプレートを作成',
                'save-btn'             => 'メールテンプレートを保存',
                'email-template'       => 'メールテンプレート',
                'subject'              => '件名',
                'content'              => '内容',
                'subject-placeholders' => '件名のプレースホルダー',
                'general'              => '一般',
                'name'                 => '名前',
            ],

            'edit' => [
                'title'                => 'メールテンプレートを編集',
                'save-btn'             => 'メールテンプレートを保存',
                'email-template'       => 'メールテンプレート',
                'subject'              => '件名',
                'content'              => '内容',
                'subject-placeholders' => '件名のプレースホルダー',
                'general'              => '一般',
                'name'                 => '名前',
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'タグを作成',
                'title'          => 'タグ',
                'create-success' => 'タグが正常に作成されました。',
                'update-success' => 'タグが正常に更新されました。',
                'delete-success' => 'タグが正常に削除されました。',
                'delete-failed'  => 'タグを削除できません。',

                'datagrid' => [
                    'delete'     => '削除',
                    'edit'       => '編集',
                    'id'         => 'ID',
                    'name'       => '名前',
                    'users'      => 'ユーザー',
                    'created-at' => '作成日',
                ],
            ],

            'create' => [
                'name'     => '名前',
                'save-btn' => 'タグを保存',
                'title'    => 'タグを作成',
                'color'    => 'カラー',
            ],

            'edit' => [
                'title' => 'タグを編集',
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'ユーザーを作成',
                'create-success'      => 'ユーザーが正常に作成されました。',
                'delete-failed'       => 'ユーザーを削除できません。',
                'delete-success'      => 'ユーザーが正常に削除されました。',
                'last-delete-error'   => '少なくとも1人のユーザーが必要です。',
                'mass-delete-failed'  => 'ユーザーを削除できません。',
                'mass-delete-success' => 'ユーザーが正常に削除されました。',
                'mass-update-failed'  => 'ユーザーを更新できません。',
                'mass-update-success' => 'ユーザーが正常に更新されました。',
                'title'               => 'ユーザー',
                'update-success'      => 'ユーザーが正常に更新されました。',
                'user-define-error'   => 'システムユーザーを削除できません。',
                'active'              => 'アクティブ',
                'inactive'            => '非アクティブ',

                'datagrid' => [
                    'active'        => 'アクティブ',
                    'created-at'    => '作成日',
                    'delete'        => '削除',
                    'edit'          => '編集',
                    'email'         => 'メール',
                    'id'            => 'ID',
                    'inactive'      => '非アクティブ',
                    'name'          => '名前',
                    'status'        => 'ステータス',
                    'update-status' => 'ステータスを更新',
                    'users'         => 'ユーザー',
                ],
            ],

            'create' => [
                'confirm-password' => 'パスワードを確認',
                'email'            => 'メール',
                'general'          => '一般',
                'global'           => 'グローバル',
                'group'            => 'グループ',
                'individual'       => '個人',
                'name'             => '名前',
                'password'         => 'パスワード',
                'permission'       => '権限',
                'role'             => '役割',
                'save-btn'         => 'ユーザーを保存',
                'status'           => 'ステータス',
                'title'            => 'ユーザーを作成',
                'view-permission'  => '表示権限',
            ],

            'edit' => [
                'title' => 'ユーザーを編集',
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'パイプライン',
                'create-btn'           => 'パイプラインを作成',
                'create-success'       => 'パイプラインが正常に作成されました。',
                'update-success'       => 'パイプラインが正常に更新されました。',
                'delete-success'       => 'パイプラインが正常に削除されました。',
                'delete-failed'        => 'パイプラインを削除できません。',
                'default-delete-error' => 'デフォルトのパイプラインは削除できません。',

                'datagrid' => [
                    'delete'      => '削除',
                    'edit'        => '編集',
                    'id'          => 'ID',
                    'is-default'  => 'デフォルト',
                    'name'        => '名前',
                    'no'          => 'いいえ',
                    'rotten-days' => 'ロッテンデイズ',
                    'yes'         => 'はい',
                ],
            ],

            'create' => [
                'title'                => 'パイプラインを作成',
                'save-btn'             => 'パイプラインを保存',
                'name'                 => '名前',
                'rotten-days'          => 'ロッテンデイズ',
                'mark-as-default'      => 'デフォルトとして設定',
                'general'              => '一般',
                'probability'          => '確率(%)',
                'new-stage'            => '新規',
                'won-stage'            => '獲得',
                'lost-stage'           => '失注',
                'stage-btn'            => 'ステージを追加',
                'stages'               => 'ステージ',
                'duplicate-name'       => '「名前」フィールドは重複できません',
                'delete-stage'         => 'ステージを削除',
                'add-new-stages'       => '新しいステージを追加',
                'add-stage-info'       => 'パイプライン用の新しいステージを追加',
                'newly-added'          => '新しく追加',
                'stage-delete-success' => 'ステージが正常に削除されました',
            ],

            'edit' => [
                'title'                => 'パイプラインを編集',
                'save-btn'             => 'パイプラインを保存',
                'name'                 => '名前',
                'rotten-days'          => 'ロッテンデイズ',
                'mark-as-default'      => 'デフォルトとして設定',
                'general'              => '一般',
                'probability'          => '確率(%)',
                'new-stage'            => '新規',
                'won-stage'            => '獲得',
                'lost-stage'           => '失注',
                'stage-btn'            => 'ステージを追加',
                'stages'               => 'ステージ',
                'duplicate-name'       => '「名前」フィールドは重複できません',
                'delete-stage'         => 'ステージを削除',
                'add-new-stages'       => '新しいステージを追加',
                'add-stage-info'       => 'パイプライン用の新しいステージを追加',
                'stage-delete-success' => 'ステージが正常に削除されました',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'Webhooks',
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

            'create' => [
                'title'                 => 'Webhookを作成',
                'save-btn'              => 'Webhookを保存',
                'info'                  => 'Webhookの詳細を入力',
                'url-and-parameters'    => 'URLとパラメータ',
                'method'                => 'メソッド',
                'post'                  => 'POST',
                'put'                   => 'PUT',
                'url-endpoint'          => 'URLエンドポイント',
                'parameters'            => 'パラメータ',
                'add-new-parameter'     => '新しいパラメータを追加',
                'url-preview'           => 'URLプレビュー:',
                'headers'               => 'ヘッダー',
                'add-new-header'        => '新しいヘッダーを追加',
                'body'                  => 'ボディ',
                'default'               => 'デフォルト',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'キーと値',
                'add-new-payload'       => '新しいペイロードを追加',
                'raw'                   => 'Raw',
                'general'               => '一般',
                'name'                  => '名前',
                'entity-type'           => 'エンティティタイプ',
                'insert-placeholder'    => 'プレースホルダーを挿入',
                'description'           => '説明',
                'json'                  => 'JSON',
                'text'                  => 'テキスト',
            ],

            'edit' => [
                'title'                 => 'Webhookを編集',
                'edit-btn'              => 'Webhookを保存',
                'save-btn'              => 'Webhookを保存',
                'info'                  => 'Webhookの詳細を入力',
                'url-and-parameters'    => 'URLとパラメータ',
                'method'                => 'メソッド',
                'post'                  => 'POST',
                'put'                   => 'PUT',
                'url-endpoint'          => 'URLエンドポイント',
                'parameters'            => 'パラメータ',
                'add-new-parameter'     => '新しいパラメータを追加',
                'url-preview'           => 'URLプレビュー:',
                'headers'               => 'ヘッダー',
                'add-new-header'        => '新しいヘッダーを追加',
                'body'                  => 'ボディ',
                'default'               => 'デフォルト',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'キーと値',
                'add-new-payload'       => '新しいペイロードを追加',
                'raw'                   => 'Raw',
                'general'               => '一般',
                'name'                  => '名前',
                'entity-type'           => 'エンティティタイプ',
                'insert-placeholder'    => 'プレースホルダーを挿入',
                'description'           => '説明',
                'json'                  => 'JSON',
                'text'                  => 'テキスト',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => '倉庫',
                'create-btn'     => '倉庫を作成',
                'create-success' => '倉庫が正常に作成されました。',
                'name-exists'    => '倉庫名は既に存在します。',
                'update-success' => '倉庫が正常に更新されました。',
                'delete-success' => '倉庫が正常に削除されました。',
                'delete-failed'  => '倉庫を削除できません。',

                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => '名前',
                    'contact-name'    => '担当者名',
                    'delete'          => '削除',
                    'edit'            => '編集',
                    'view'            => '表示',
                    'created-at'      => '作成日',
                    'products'        => '製品',
                    'contact-emails'  => '担当者のメール',
                    'contact-numbers' => '担当者の電話番号',
                ],
            ],

            'create' => [
                'title'         => '倉庫を作成',
                'save-btn'      => '倉庫を保存',
                'contact-info'  => '連絡先情報',
            ],

            'edit' => [
                'title'         => '倉庫を編集',
                'save-btn'      => '倉庫を保存',
                'contact-info'  => '連絡先情報',
            ],

            'view' => [
                'all'         => 'すべて',
                'notes'       => 'メモ',
                'files'       => 'ファイル',
                'location'    => '場所',
                'change-logs' => '変更履歴',

                'locations' => [
                    'action'         => 'アクション',
                    'add-location'   => '場所を追加',
                    'create-success' => '場所が正常に作成されました。',
                    'delete'         => '削除',
                    'delete-failed'  => '場所を削除できません。',
                    'delete-success' => '場所が正常に削除されました。',
                    'name'           => '名前',
                    'save-btn'       => '保存',
                ],

                'general-information' => [
                    'title' => '基本情報',
                ],

                'contact-information' => [
                    'title' => '連絡先情報',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => '属性',
                'create-btn'         => '属性を作成',
                'create-success'     => '属性が正常に作成されました。',
                'update-success'     => '属性が正常に更新されました。',
                'delete-success'     => '属性が正常に削除されました。',
                'delete-failed'      => '属性を削除できません。',
                'user-define-error'  => 'システム属性は削除できません。',
                'mass-delete-failed' => 'システム属性は削除できません。',

                'datagrid' => [
                    'yes'         => 'はい',
                    'no'          => 'いいえ',
                    'id'          => 'ID',
                    'code'        => 'コード',
                    'name'        => '名前',
                    'entity-type' => 'エンティティタイプ',
                    'type'        => 'タイプ',
                    'is-default'  => 'デフォルト',
                    'edit'        => '編集',
                    'delete'      => '削除',
                ],
            ],

            'create'  => [
                'title'                 => '属性を作成',
                'save-btn'              => '属性を保存',
                'code'                  => 'コード',
                'name'                  => '名前',
                'entity-type'           => 'エンティティタイプ',
                'type'                  => 'タイプ',
                'validations'           => 'バリデーション',
                'is-required'           => '必須',
                'input-validation'      => '入力バリデーション',
                'is-unique'             => '一意である',
                'labels'                => 'ラベル',
                'general'               => '一般',
                'numeric'               => '数値',
                'decimal'               => '小数',
                'url'                   => 'URL',
                'options'               => 'オプション',
                'option-type'           => 'オプションタイプ',
                'lookup-type'           => 'ルックアップタイプ',
                'add-option'            => 'オプションを追加',
                'save-option'           => 'オプションを保存',
                'option-name'           => 'オプション名',
                'add-attribute-options' => '属性オプションを追加',
                'text'                  => 'テキスト',
                'textarea'              => 'テキストエリア',
                'price'                 => '価格',
                'boolean'               => '真偽値',
                'select'                => '選択',
                'multiselect'           => '複数選択',
                'email'                 => 'メール',
                'address'               => '住所',
                'phone'                 => '電話',
                'datetime'              => '日時',
                'date'                  => '日付',
                'image'                 => '画像',
                'file'                  => 'ファイル',
                'lookup'                => 'ルックアップ',
                'entity_type'           => 'エンティティタイプ',
                'checkbox'              => 'チェックボックス',
                'is_required'           => '必須',
                'is_unique'             => '一意である',
                'actions'               => 'アクション',
            ],

            'edit'  => [
                'title'                 => '属性を編集',
                'save-btn'              => '属性を保存',
                'code'                  => 'コード',
                'name'                  => '名前',
                'labels'                => 'ラベル',
                'entity-type'           => 'エンティティタイプ',
                'type'                  => 'タイプ',
                'validations'           => 'バリデーション',
                'is-required'           => '必須',
                'input-validation'      => '入力バリデーション',
                'is-unique'             => '一意である',
                'general'               => '一般',
                'numeric'               => '数値',
                'decimal'               => '小数',
                'url'                   => 'URL',
                'options'               => 'オプション',
                'option-type'           => 'オプションタイプ',
                'lookup-type'           => 'ルックアップタイプ',
                'add-option'            => 'オプションを追加',
                'save-option'           => 'オプションを保存',
                'option-name'           => 'オプション名',
                'add-attribute-options' => '属性オプションを追加',
            ],
        ],

    ],

    'activities' => [
        'index' => [
            'title'      => 'アクティビティ',

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
                'schedule-from' => '開始予定',
                'schedule-to'   => '終了予定',
                'schedule_from' => '開始予定',
                'schedule_to'   => '終了予定',
                'title'         => 'タイトル',
                'is_done'       => '完了',
                'type'          => '種類',
                'update'        => '更新',
                'call'          => '通話',
                'meeting'       => '会議',
                'lunch'         => 'ランチ',
            ],
        ],

        'edit' => [
            'title'           => 'アクティビティの編集',
            'back-btn'        => '戻る',
            'save-btn'        => 'アクティビティを保存',
            'type'            => 'アクティビティの種類',
            'call'            => '通話',
            'meeting'         => '会議',
            'lunch'           => 'ランチ',
            'schedule_to'     => '終了予定',
            'schedule_from'   => '開始予定',
            'location'        => '場所',
            'comment'         => 'コメント',
            'lead'            => 'リード',
            'participants'    => '参加者',
            'general'         => '一般',
            'persons'         => '人物',
            'no-result-found' => '記録が見つかりません。',
            'users'           => 'ユーザー',
        ],

        'updated'              => ':attribute が更新されました',
        'created'              => '作成されました',
        'duration-overlapping' => '参加者はこの時間に別の会議があります。続行しますか？',
        'create-success'       => 'アクティビティが正常に作成されました。',
        'update-success'       => 'アクティビティが正常に更新されました。',
        'overlapping-error'    => '参加者はこの時間に別の会議があります。',
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
            'compose-mail-btn'  => 'メールを作成',
            'btn'               => 'メール',
            'mail'              => [
                'title'         => 'メールを作成',
                'to'            => '宛先',
                'enter-emails'  => 'メールアドレスを入力しEnterを押してください',
                'cc'            => 'CC',
                'bcc'           => 'BCC',
                'subject'       => '件名',
                'send-btn'      => '送信',
                'message'       => 'メッセージ',
                'draft'         => '下書き',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => '送信者',
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
            'rotten-days'                => 'リードが :days 日間放置されています',
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
            'linked-contact'             => '関連付けられた連絡先',
            'link-to-contact'            => '連絡先にリンク',
            'link-to-lead'               => 'リードにリンク',
            'linked-lead'                => '関連付けられたリード',
            'lead-details'               => 'リード詳細',
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
            'select-state'   => '州を選択',
            'state'          => '州',
            'city'           => '市区町村',
            'postcode'       => '郵便番号',
            'work'           => '職場',
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
        'update-failed'     => 'リードを削除できません。',
        'destroy-success'   => 'リードが正常に削除されました。',
        'destroy-failed'    => 'リードを削除できません。',

        'index' => [
            'title'      => 'リード',
            'create-btn' => 'リードを作成',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => '営業担当',
                'subject'             => '件名',
                'source'              => 'ソース',
                'lead-value'          => 'リードの価値',
                'lead-type'           => 'リードタイプ',
                'tag-name'            => 'タグ名',
                'contact-person'      => '連絡先',
                'stage'               => 'ステージ',
                'rotten-lead'         => '失効リード',
                'expected-close-date' => '予想終了日',
                'created-at'          => '作成日',
                'no'                  => 'いいえ',
                'yes'                 => 'はい',
                'delete'              => '削除',
                'mass-delete'         => '一括削除',
                'mass-update'         => '一括更新',
            ],

            'kanban' => [
                'rotten-days'            => 'リードが :days 日間失効しています',
                'empty-list'             => 'リードリストが空です',
                'empty-list-description' => 'リードを作成して目標を整理しましょう。',
                'create-lead-btn'        => 'リードを作成',

                'columns' => [
                    'contact-person'      => '連絡先',
                    'id'                  => 'ID',
                    'lead-type'           => 'リードタイプ',
                    'lead-value'          => 'リードの価値',
                    'sales-person'        => '営業担当',
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
            'details-info'   => 'リードの基本情報を入力',
            'contact-person' => '連絡先',
            'contact-info'   => '連絡先の情報',
            'products'       => '製品',
            'products-info'  => '製品情報',
        ],

        'edit' => [
            'title'          => 'リードを編集',
            'save-btn'       => '保存',
            'details'        => '詳細',
            'details-info'   => 'リードの基本情報を入力',
            'contact-person' => '連絡先',
            'contact-info'   => '連絡先の情報',
            'products'       => '製品',
            'products-info'  => '製品情報',
        ],

        'common' => [
            'contact' => [
                'name'           => '名前',
                'email'          => 'メール',
                'contact-number' => '連絡先番号',
                'organization'   => '組織',
            ],
        
            'products' => [
                'product-name' => '製品名',
                'quantity'     => '数量',
                'price'        => '価格',
                'amount'       => '金額',
                'action'       => 'アクション',
                'add-more'     => 'さらに追加',
                'total'        => '合計',
            ],
        ],

        'view' => [
            'title'       => 'リード: :title',
            'rotten-days' => ':days 日',

            'tabs'        => [
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
                'empty-info'      => 'このリードには見積もりがありません',
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
                'empty-info'   => 'このリードには製品がありません',
                'add-product'  => '製品を追加',
            ],

            'persons' => [
                'title'     => '担当者について',
                'job-title' => ':organization の :job_title',
            ],

            'stages' => [
                'won-lost'       => '獲得 / 失注',
                'won'            => '獲得',
                'lost'           => '失注',
                'need-more-info' => '詳細情報が必要',
                'closed-at'      => 'クローズ日時',
                'won-value'      => '獲得金額',
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

            'general'  => [
                'title'   => '一般',
                'info'    => '一般設定',

                'general' => [
                    'title'           => '一般',
                    'info'            => 'ここで一般設定を更新できます。',
                    'locale-settings' => [
                        'title'       => 'ロケール設定',
                        'title-info'  => 'ユーザーインターフェースで使用する言語を定義します。（例: アラビア語(ar)、英語(en)、スペイン語(es)、ペルシャ語(fa)、トルコ語(tr)）',
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
                'average-lead-value'    => 'リードの平均価値',
                'total-leads'           => '総リード数',
                'average-leads-per-day' => '1日あたりの平均リード数',
                'total-quotations'      => '総見積もり数',
                'total-persons'         => '総担当者数',
                'total-organizations'   => '総組織数',
            ],

            'total-leads' => [
                'title' => 'リード',
                'total' => '総リード数',
                'won'   => '獲得したリード',
                'lost'  => '失注したリード',
            ],

            'revenue-by-sources' => [
                'title'       => '収益の発生源別分析',
                'empty-title' => 'データなし',
                'empty-info'  => '選択した期間のデータがありません',
            ],

            'revenue-by-types' => [
                'title'       => '収益の種類別分析',
                'empty-title' => 'データなし',
                'empty-info'  => '選択した期間のデータがありません',
            ],

            'top-selling-products' => [
                'title'       => '売上トップの製品',
                'empty-title' => '製品が見つかりません',
                'empty-info'  => '選択した期間の製品データがありません',
            ],

            'top-persons' => [
                'title'       => 'トップ担当者',
                'empty-title' => '担当者が見つかりません',
                'empty-info'  => '選択した期間の担当者データがありません',
            ],

            'open-leads-by-states' => [
                'title'       => 'リードの状況別分析',
                'empty-title' => 'データなし',
                'empty-info'  => '選択した期間のデータがありません',
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
        'user-info'            => 'CRM内のすべてのユーザーとその権限を管理し、実行できる操作を制御します。',
        'groups'               => 'グループ',
        'groups-info'          => 'CRMでグループを追加、編集、削除できます。',
        'roles'                => '役割',
        'role'                 => '役割',
        'roles-info'           => 'CRMで役割を追加、編集、削除できます。',
        'users'                => 'ユーザー',
        'users-info'           => 'CRMでユーザーを追加、編集、削除できます。',
        'lead'                 => 'リード',
        'lead-info'            => 'CRM内のすべてのリード関連設定を管理します。',
        'pipelines'            => 'パイプライン',
        'pipelines-info'       => 'CRMでパイプラインを追加、編集、削除できます。',
        'sources'              => 'ソース',
        'sources-info'         => 'CRMでソースを追加、編集、削除できます。',
        'types'                => 'タイプ',
        'types-info'           => 'CRMでタイプを追加、編集、削除できます。',
        'automation'           => '自動化',
        'automation-info'      => 'CRM内のすべての自動化関連設定を管理します。',
        'attributes'           => '属性',
        'attribute'            => '属性',
        'attributes-info'      => 'CRMで属性を追加、編集、削除できます。',
        'email-templates'      => 'メールテンプレート',
        'email'                => 'メール',
        'email-templates-info' => 'CRMでメールテンプレートを追加、編集、削除できます。',
        'workflows'            => 'ワークフロー',
        'workflows-info'       => 'CRMでワークフローを追加、編集、削除できます。',
        'webhooks'             => 'Webhooks',
        'webhooks-info'        => 'CRMでWebhooksを追加、編集、削除できます。',
        'other-settings'       => 'その他の設定',
        'other-settings-info'  => 'CRMの追加設定を管理します。',
        'tags'                 => 'タグ',
        'tags-info'            => 'CRMでタグを追加、編集、削除できます。',
        'my-account'           => 'マイアカウント',
        'sign-out'             => 'ログアウト',
        'back'                 => '戻る',
        'name'                 => '名前',
        'configuration'        => '設定',
        'activities'           => 'アクティビティ',
        'howdy'                => 'こんにちは！',
        'warehouses'           => '倉庫',
        'warehouse'            => '倉庫',
        'warehouses-info'      => 'CRMで倉庫を追加、編集、削除できます。',
    ],

    'user' => [
        'account' => [
            'name'                  => '名前',
            'email'                 => 'メールアドレス',
            'password'              => 'パスワード',
            'my_account'            => 'マイアカウント',
            'update_details'        => '詳細を更新',
            'current_password'      => '現在のパスワード',
            'confirm_password'      => 'パスワード確認',
            'password-match'        => '現在のパスワードが一致しません。',
            'account-save'          => 'アカウントの変更が正常に保存されました。',
            'permission-denied'     => 'アクセスが拒否されました。',
            'remove-image'          => '画像を削除',
            'upload_image_pix'      => 'プロフィール画像をアップロード（100px × 100px）',
            'upload_image_format'   => 'PNGまたはJPG形式でアップロード',
            'image_upload_message'  => '画像ファイル（.jpeg, .jpg, .png のみ）をアップロードできます。',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => ':name 様',
            'cheers' => 'よろしくお願いいたします。</br>:app_name チーム',

            'user'   => [
                'dear'           => ':username 様',
                'create-subject' => 'あなたがメンバーとして追加されました。',
                'create-body'    => 'おめでとうございます！あなたは私たちのチームのメンバーになりました。',

                'forget-password' => [
                    'subject'           => 'パスワードリセットのご案内',
                    'dear'              => ':username 様',
                    'reset-password'    => 'パスワードをリセット',
                    'info'              => 'このメールは、あなたのアカウントのパスワードリセットリクエストを受信したため送信されています。',
                    'final-summary'     => 'もしパスワードリセットをリクエストしていない場合は、このメールを無視してください。',
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
            'description' => 'お探しのページは見つかりませんでした。',
            'title'       => '404 ページが見つかりません',
        ],

        '401' => [
            'description' => 'このページへのアクセス権がありません。必要な認証情報が不足している可能性があります。',
            'title'       => '401 認証エラー',
        ],

        '403' => [
            'description' => 'このページへのアクセスは制限されています。必要な権限がありません。',
            'title'       => '403 アクセス禁止',
        ],

        '500' => [
            'description' => '内部サーバーエラーが発生しました。ページの読み込みに問題が発生しています。',
            'title'       => '500 内部サーバーエラー',
        ],

        '503' => [
            'description' => '現在メンテナンス中です。しばらくしてから再度お試しください。',
            'title'       => '503 サービス利用不可',
        ],
    ],
];
