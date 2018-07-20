<html>
<head>
  <meta charset="utf-8">
  <title>Syllabusサンプル</title>
</head>
<body>
  <h1>GETパラメータ表示</h1>
  <p>
GETパラメータ
  </p>
  <p>
    <ul>
<?php
  while(list($key, $val) = each($_GET)) {
    print("<li>" . $key . ": " . $val . "</li>");
  }
?>
    </ul>
  </p>
  <p>
    <a href="/index.php">戻る</a>
  </p>
</body>
</html>
