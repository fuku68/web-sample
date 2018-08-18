<?php
  if($_SERVER["REQUEST_METHOD"] != "POST"){
    header('Location: /index.php', true, 301);
    exit();
  }
  $name = $_POST["name"];
  $contents = $_POST["contents"];

  $slackApiKey = "";
  $text = urlencode("名前:" . $name . "\n" . $contents);
  $url = "https://slack.com/api/chat.postMessage?token=${slackApiKey}&channel=%23td_syllabus_engineer&text=${text}&as_user=true";
  file_get_contents($url);
  setcookie("questionnaire", true); 
?>
<!DOCTYPE html>
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
    <title>アンケート回答</title>
  </head>
  <body>
    <div class="container">
      <h1>アンケート</h1>
      <div>
        <?php print($name); ?>さん、アンケートへのご回答ありがとうございました。
      </div>
      <button type="button" class="btn btn-default" onclick="location.href='/index.php'"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>戻る</button>
    </div>
  </body>
</html>

