<?php
// DB接続の一覧から値を検索するページ

require_once('function.php');
require_once('db_connect');

$nickname = '';
if () {

}
$dbh->prepare('SELECT * FROM  survays WHERE nickname Like');
$stmt->execute(["%$nickname%"]);
// テーブル内部全出し。
$results = $stmt->fetchAll();

 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="search.php" method="GET">
            <input type="text" name="nickname">
            <input type="submit" name="email" value="search">
        </form>
        <?php foreach ($results as $result):?>
            <p><?php echo h($result['nickname']) ?></p>
            <p><?php echo h($result['email']) ?></p>
            <p><?php echo h($result['content']) ?></p>
        <?php endforeach; ?>
    </body>
</html>
