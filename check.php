<?php
    //  ▼セキュリティ▼
    //  きちんとメソッドに値が来ているか確認する処理
    //  （メソッドがPOSTじゃ無い時はinde.htmlにredirect）
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: index.html');
    }

    // ▼$_POST ... super global 関数▼
    // $nickname = $_POST['nickname'];
    // $email = $_POST['email'];
    // $content = $_POST['content'];
    // echo $nickname;

    // ▼クロスサイトスクリプト対策（XSS）▼
    // htmlspecialchars()
    // https://www.php.net/manual/ja/function.htmlspecialchars.php
    // $nickname = htmlspecialchars($_POST['nickname']);
    // $email = htmlspecialchars($_POST['email']);
    // $content = htmlspecialchars($_POST['content']);

    //▼関数呼び出し▼
    //（_once 一回切り呼び出す！意）
    require_once('function.php');
    $nickname = h($_POST['nickname']);
    $email = h($_POST['email']);
    $content = h($_POST['content']);

    // ▼条件分岐▼
    // （入力フォームに値が無い時にエラー文を返す。）
    if ($nickname == "") {
        $nickname_result = '<span style="color:red;">No Nickname</span>';
    } else {
        $nickname_result = "Welcom to ${nickname} ";
    }

    if ($email == "") {
        $email_result = '<span style="color:red;">No email</span>';
    } else {
        $email_result = "Your mail address : ${email} ";
    }

    if ($content == "") {
        $content_result = '<span style="color:red;">No content</span>';
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
        <!-- コロン構文を用いてHTML内部にPHPを書く。 if(){} = if():-->
        <?php if ($nickname != "" && $email != "" && $content != ""):?>
            <input type="submit" value="Submit OK">
        <?php endif; ?>
    </form>

</body>
</html>
