<?php
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    }
    require_once('function.php');
    $nickname = h($_POST['nickname']);
    $email = h($_POST['email']);
    $content = h($_POST['content']);

    // DBとの接続文
    require_once('db_connect.php');
    $dbh->prepare('INSERT INTO survays (nickname, email, content) VALUES(?,?,?)');
    $stmt->execute([$nickname, $email, $content]);


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
