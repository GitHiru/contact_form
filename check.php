<?php
    //$_POST ... super global 関数
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    // echo $nickname;
    //
    if ($nickname == "") {
        $nickname_result = 'No Nickname';
    } else {
        $nickname_result = "Welcom to ${nickname} ";
    }

    if ($email == "") {
        $email_result = 'No email';
    } else {
        $email_result = "Your mail address : ${email} ";
    }

    if ($content == "") {
        $content_result = 'No content';
    } else {
        $content_result = "Your content : ${content} ";
    }

?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>conform</title>
</head>
<body>
    <h1>Cnform view</h1>
    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>
</body>
</html>
