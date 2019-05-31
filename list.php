<?php
// DB接続の一覧を表示するページ

require_once('function.php');
require_once('db_connect');

$dbh->prepare('SELECT * FROM  survays WHERE ');
$stmt->execute();
// テーブル内部全出し。
$results = $stmt->fetchAll();

// var_dump($results);
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($results as $result):?>
            <p><?php echo h($result['nickname']) ?></p>
            <p><?php echo h($result['email']) ?></p>
            <p><?php echo h($result['content']) ?></p>
        <?php endforeach; ?>
    </body>
</html>
