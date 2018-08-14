<?php
// cookie があればプラス1、無い場合は1にする
if ($_COOKIE['visit']) {
  $count = $_COOKIE['visit'] + 1;
} else {
  $count = 1;
}
setcookie("visit", $count);
?>
<html>
<body>
こんにちは。
<?php print $count ;?>
回目の訪問ありがとうございます。
</body>
</html>
