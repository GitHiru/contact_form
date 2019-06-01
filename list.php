<?php
// DB接続の一覧を表示するページ
require_once('function.php');
require_once('dbconnect.php');
$stmt = $dbh->prepare('SELECT * FROM surveys');
$stmt->execute();
$results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php foreach ($results as $result): ?>
        <p><?php echo h($result['nickname']) ?></p>
        <p><?php echo h($result['email']) ?></p>
        <p><?php echo h($result['content']) ?></p>
    <?php endforeach;?>
</body>
</html>
