# カスタム修正記録

## パイプライン・ステージ整合性の修正

### 修正日: 2025-07-08
### 問題: リード作成時に選択したパイプラインと異なるパイプラインに保存される

### 修正ファイル一覧:

1. **packages/Webkul/Admin/src/Http/Controllers/Lead/LeadController.php**
   - store()メソッドとupdate()メソッドで、lead_pipeline_idが直接指定された場合の処理を追加
   - パイプラインIDが直接選択された場合、そのパイプラインの最初のステージを自動設定

2. **packages/Webkul/Admin/src/Resources/views/leads/create.blade.php**
   - リード作成フォームにパイプライン・ステージ選択フィールドを追加
   - 重複表示の問題を解決

3. **packages/Webkul/Lead/src/Repositories/LeadRepository.php**
   - create()メソッドとupdate()メソッドで、attribute_values保存時にlead_pipeline_idとlead_pipeline_stage_idを除外
   - パイプラインIDが上書きされる問題を解決

4. **packages/Webkul/Admin/src/Resources/views/components/attributes/edit/lookup.blade.php**
   - 検索の最小文字数を2文字から1文字に変更
   - ポップアップ開時に初期データを読み込む機能を追加

5. **packages/Webkul/Admin/src/Resources/views/components/lookup/index.blade.php**
   - 検索の最小文字数を2文字から1文字に変更
   - ポップアップ開時に初期データを読み込む機能を追加

6. **packages/Webkul/Admin/src/Resources/views/components/form/control-group/controls/inline/lookup.blade.php**
   - 検索の最小文字数を2文字から1文字に変更

7. **packages/Webkul/Admin/src/Routes/Admin/leads-routes.php**
   - パイプラインのステージ一覧を取得するAPIエンドポイントを追加

### 今後のアップデート時の注意点:

1. **LeadController.php**: store()とupdate()メソッドのパイプライン処理ロジック、getPipelineStages()メソッド
2. **LeadRepository.php**: attribute_values保存時の除外処理
3. **create.blade.php**: パイプライン・ステージ選択フィールドの配置、Vueコンポーネントのイベント処理
4. **lookup.blade.php**: 検索機能の改善、パイプライン変更イベントの発火
5. **leads-routes.php**: パイプラインステージ取得APIエンドポイント

### 未実装の改善点:

- ~~UI側でのパイプライン・ステージ整合性の動的制御~~ ✅ 実装済み
- ~~パイプライン選択時にステージ候補を動的に切り替える機能~~ ✅ 実装済み

### コミットハッシュ:
- 2043c62b: Fix: Pipeline and stage consistency in lead creation
- a32d00be: Add: Pipeline change triggers stage auto-reset 