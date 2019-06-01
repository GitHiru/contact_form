<?php
//▼DBへ接続させるために必要なページ
$host = 'localhost'; //MySQLがインストールされてるコンピュータ
$dbname = 'contact_form'; //使用するDB
$charset = 'utf8'; //文字コード

$dsn = 'mysql:host=$host;dbname=$dbname;charset=$charset';
$user = 'root'; //MySQLにログインするユーザー名
$password='root';//ユーザーのパスワード
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    //SQLでエラーが表示された場合、画面にエラーが出力される
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //DBから取得したデータを連想配列の形式で取得する
    PDO::ATTR_EMULATE_PREPARES   => false,
    //SQLインジェクション対策
];

try {
    /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */
    //DBへ接続
    $dbh = new PDO(
        $dsn,
        $user,
        $password,
        $options
    );
    echo 'Connected successfully'.'<br>';
    /* データベースから値を取ってきたり， データを挿入したりする処理 */
} catch (PDOException $e) {
    // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
    // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
    // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
    // header('Content-Type: text/plain; charset=UTF-8', true, 500);
    // exit($e->getMessage());

    echo 'Connection failed:'. $e->getMessage();
    exit;

    // new \PDOException($e->getMessage(), (int)$e->getCode());
}
