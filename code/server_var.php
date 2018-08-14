<html>
<body>
<center>
<table border="1" bordercolor="#666699" cellspacing="0" cellpadding="5">
<caption>環境変数一覧表</caption>
<?php
	while(list($key, $value) = each($_SERVER)) {
    echo "<tr><td>$key</td><td>", $value, "</td></tr>\n";
  }
?>
</table>
</center>
</body>
</html>
