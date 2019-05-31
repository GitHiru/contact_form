<?php

//▼DBに接続
$host = "localhost:8888";//MySQLがインストールされてるコンピュータ
$dbname = "contact_form";//使用するDB
$charset = "utf8mb4";
$user = "root";//MySQLにログインするユーザー名
$password = "";//ユーザーのパスワード（便宜的に空）
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    //SQLでエラーが表示された場合、画面にエラーが出力される
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     //DBから取得したデータを連想配列の形式で取得する
    PDO::ATTR_EMULATE_PREPARES   => false,
    //SQLインジェクション対策
];

//DBへの接続設定
//https://qiita.com/mpyw/items/b00b72c5c95aac573b71
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try {
    //DBへ接続
    $dbh = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
