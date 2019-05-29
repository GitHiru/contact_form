<?php
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
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
