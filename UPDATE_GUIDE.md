# アップデート手順

## 元のリポジトリからアップデートを取得する場合

### 1. 現在の修正をバックアップ
```bash
git branch backup-$(date +%Y%m%d)
```

### 2. 元のリポジトリの更新を取得
```bash
git fetch origin
git checkout main
git pull origin main
```

### 3. カスタム修正を再適用
```bash
git checkout feat-japanese-translation
git rebase main
```

### 4. コンフリクトが発生した場合の対処

#### LeadController.php のコンフリクト
- store()メソッドとupdate()メソッドのパイプライン処理ロジックを確認
- 以下の部分が正しく適用されているかチェック:
```php
} elseif (isset($data['lead_pipeline_id'])) {
    // パイプラインが直接選択された場合、そのパイプラインの最初のステージを取得
    $pipeline = $this->pipelineRepository->findOrFail($data['lead_pipeline_id']);
    $stage = $pipeline->stages()->first();
    
    if (!isset($data['lead_pipeline_stage_id'])) {
        $data['lead_pipeline_stage_id'] = $stage->id;
    }
```

#### LeadRepository.php のコンフリクト
- create()メソッドとupdate()メソッドのattribute_values保存処理を確認
- 以下の部分が正しく適用されているかチェック:
```php
// パイプライン関連の属性を除外してattribute_valuesを保存
$attributeData = array_merge($data, [
    'entity_id' => $lead->id,
]);

// lead_pipeline_idとlead_pipeline_stage_idを除外
unset($attributeData['lead_pipeline_id']);
unset($attributeData['lead_pipeline_stage_id']);

$this->attributeValueRepository->save($attributeData);
```

#### create.blade.php のコンフリクト
- パイプライン・ステージ選択フィールドが正しく配置されているかチェック
- 重複表示が解消されているかチェック

#### lookup.blade.php のコンフリクト
- 検索の最小文字数が1文字に設定されているかチェック
- 初期データ読み込み機能が追加されているかチェック

### 5. テスト
- リード作成でパイプライン・ステージが正しく選択できるかテスト
- 選択したパイプラインにリードが正しく保存されるかテスト

## 注意点

- アップデート後は必ずテストを実行してください
- コンフリクトが発生した場合は、CUSTOM_FIXES.mdを参照して修正内容を確認してください
- 新しい機能が追加された場合は、既存の修正との整合性を確認してください 