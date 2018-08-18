<!DOCTYPE html>
<?php
// 回答済みかのチェック
if ($_COOKIE['questionnaire']) {
  $answered = true;
} else {
  $answered = false;
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>アンケート</title>
  </head>
  <body>
    <div class="container">
      <h1>アンケート</h1>
      <?php if($answered) { ?>
        <p>アンケートへのご回答ありがとうございました。</p>
        <button type="button" class="btn btn-default" onclick="location.href='/index.php'"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>戻る</button>
      <?php } else { ?>
        <form method="POST" action="/questionnaire_submit.php">
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-play" aria-hidden="true"></span>送信</button>
          <button type="button" class="btn btn-default" onclick="location.href='/index.php'"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>戻る</button>
          <div class="form-group">
            <label for="name">名前</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="山田太郎">
          </div>
          <div class="form-group">
            <label for="contents">感想・質問(今後取り上げて欲しいことや、内容に関しての改善点、疑問点など自由です)</label>
            <textarea class="form-control" id="contents" name="contents" rows="20"></textarea>
          </div>
        </form>
      <?php } ?>
    </div>
  </body>
</html>
