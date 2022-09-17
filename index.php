<?php
  function NewPage($name) {
    $file = "rooms/" . $name;
    if(file_exists($file)) {
      return false;
    } else {
      touch()
    }
  }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>WebDice</title>
    <link rel="stylesheet" href="WebDice.css">
  </head>
  <body>
    <div class="header">
      <h2><a href="#"><span class="textRed">WebDice</span></a></h1>
    </div>
    <div class="title">
      <h1><span class="textRed">WebDice</span></h1>
      
      <p><span class="textWhite">簡単な操作でダイスをロールできる会員登録不要のオンラインダイスツールです。</span></p>
      <p><span class="textWhite">ルームURLを自由に決めて、ダイス結果をリアルタイムで皆に共有できます。</span></p><br>

      <p><span class="textWhite">https://shirodaruma.php.xdomain.jp/WebDice/rooms/</span><input type="url" id="url" name="url" placeholder="ルームURLを入力"></p>
      <p><span class="textWhite">パスワードを入力</span><input type="password" id="password" name="password"></p>
      <input type="submit" id="submit" name="submit" value="新規ルーム" onclick="<?php ?>">
      <input type="submit" id="submit" name="submit" value="ルーム入室">
    </div>
  </body>
</html>