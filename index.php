<?php
$val = isset($_POST['val'])?$_POST['val']:"";
// ここでvalの値を受け取れるよ
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP_Study</title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text" name="val" value="<?php echo $val; ?>">
      <button type="submit" name="submit" value="submit">送信</button>
    </form>
    <?php echo $val; ?>
  </body>
</html>
