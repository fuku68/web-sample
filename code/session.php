<?php
  session_start();

	if (!isset($_SESSION['count'])) {
	    // キー'count'が登録されていなければ、1を設定
	    $_SESSION['count'] = 1;
	} else {
	    //  キー'count'が登録されていれば、その値をインクリメント
	    $_SESSION['count']++;
	}
?>
<html>
<body>
こんにちは。
<?php print $_SESSION['count'];?> 
回目の訪問ありがとうございます。
</body>
</html>
