<?php
    //$_POST ... super global 関数
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    // echo $nickname;

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

    <form class="" action="thanks.php" method="post">
        <input type="hidden" name="nickname" value="<?php echo $nickname ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="content" value="<?php echo $content ?>">

        <input type="button" value="Back" onclick="history.back()">
        <!-- コロン構文を用いてHTML内部にPHPを書く。 -->
        <?php if ($nickname != "" && $email != "" && $content != ""): //コロン構文 ?>
            <input type="submit" value="Submit OK">
        <?php endif; ?>
    </form>
</body>
</html>
