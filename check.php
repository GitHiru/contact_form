<?php
    /* セキュリティ */
    //  きちんとメソッドに値が来ているか確認する処理
    //  （メソッドがPOSTじゃ無い時はinde.htmlにredirect）
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('Location: index.html');
    }

    /* ▼$_POST ... super global 関数▼ */
    // // POSTで受けた値を引き継ぐ
    // $nickname = $_POST['nickname'];
    // $email = $_POST['email'];
    // $content = $_POST['content'];
    // // echo $nickname;

    /* ▼クロスサイトスクリプト対策（XSS）▼ */
    // // 「htmlspecialchars()」
    // // （参考）https://www.php.net/manual/ja/function.htmlspecialchars.php
    // $nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES, 'UTF-8');
    // $email = htmlspecialchars($_POST['email']);
    // $content = htmlspecialchars($_POST['content']);

    /* 関数処理 */
    require_once('function.php'); //（_once 一回切り呼び出す！意）
    $nickname = h($_POST['nickname']);
    $email    = h($_POST['email']);
    $content  = h($_POST['content']);

    /* 入力エラー表示 */
    //（ニックネーム：値の有無で処理を分岐）
    if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されてません。';
    } else {
        $nickname_result = 'ようこそ、' . $nickname . '様';
    }

    //（メールアドレス：値の有無で処理を分岐）
    if ($email == '') {
        $email_result = 'メールアドレスが入力されてません。';
    } else {
        $email_result = 'メールアドレス:' . $email;
    }

    //（お問い合わせ内容：値の有無で処理を分岐）
    if ($content == '') {
        $content_result = 'お問い合わせ内容が入力されていません。';
    } else {
        $content_result = 'お問い合わせ内容:' . $content;
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo $nickname_result ?></p>
    <p><?php echo $email_result ?></p>
    <p><?php echo $content_result ?></p>

    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname?>">
        <input type="hidden" name="email" value="<?php echo $email?>">
        <input type="hidden" name="content" value="<?php echo $content?>">

        <input type="button" value="戻る" onclick="history.back()">
        <!-- 入力内容に空がある場合はOKボタンが出ない-->
        <!-- コロン構文を用いてHTML内部にPHPを書く。 if(){} = if():-->
        <?php if ($email != '' && $nickname != '' && $content != ''):?>
            <input type="submit" value="OK">
        <?php endif;?>
    </form>
</body>
</html>
