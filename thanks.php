<?php
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    }
    require_once('function.php');
    $nickname = h($_POST['nickname']);
    $email = h($_POST['email']);
    $content = h($_POST['content']);

    // ▼DBとの接続文
    require_once('dbconnect.php');
    $stmt = $dbh->prepare('INSERT INTO surveys (nickname, email, content) VALUES (?, ?, ?)');
    //DBにInsertする準備（アロー演算子がNewでインスタンスされたクラスから引っ張る）
    $stmt->execute([$nickname, $email, $content]);
    //?を変数に置き換えてSQLを実行
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Thanks page</title>
</head>
<body>

    <h1>Thank you for your contact.</h1>
    <p><?php echo $nickname; ?></p>
    <p><?php echo $email; ?></p>
    <p><?php echo $content; ?></p>

</body>
</html>
