<!DOCTYPE html>
<html lang="ja">
<?php require_once('header.php'); ?>
  <article>

  <h1>Contact</h1>
      <form action="check.php" method="POST">
        <div>
          <h2>■Name</h2>
          <input type="text" name="nickname">
        </div>
        <div>
          <h2>■Mial</h2>
          <input type="text" name="email">
        </div>
        <div>
          <h2>■Comment</h2>
          <textarea type="text" name="content"></textarea>
        </div>
        <input type="submit" name="submit" value="Submit">
      </form>

      <!--
      参考：https://qiita.com/kanataxa/items/522efb74421255f0e0a1
      POST データを隠す。
      GET データ隠さず。ただブックマーク可能。パラメーター付与したままURLを遅れる。
      -->
  </article>

 <?php require_once('footer.php'); ?>
</html>
