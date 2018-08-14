<!DOCTYPE html>
<?php
  $count = 7;
  $numbers = [];
  for ($i = 0; $i < $count; $i++) {
    $num = rand(0, 100);
    if (in_array($num, $numbers)) {
      $i--;
      continue;
    }
    array_push($numbers, $num);
  }
  sort($numbers);
  $target_index = rand(0, $count - 1);
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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style type="text/css" media="screen">
      .card-wrap {
        width: 100px;
        height: 130px;
        border-style: solid;
        float: left;
        position: relative;
      }
      .card-wrap .card-img {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
      }
      .card-content {
        font-size: 20px;
        text-align: center;
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <h1 class="m-sm-3">数字探しゲーム２</h1>
    <p class="m-sm-3">
      <button type="button" class="btn btn-default" onclick="location.href='/index.php'"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>戻る</button>
    </p>
    <div class="m-sm-3">
      数字の<em><?php print($numbers[$target_index]) ?></em>を探してください。ただし左から小さい順にソートされています。
    <div>
    <?php for ($i = 0; $i < $count; $i++) { ?>
    <div class="card-wrap m-sm-3">
      <div class="card-content">
        <?php print($numbers[$i]) ?>
      </div>
      <img border="0" class="card-img" src="/images/card.jpg">
    </div>
    <?php } ?>
    <script>
      $('img').click(function(evt, obj){
        console.log(evt);
        $(evt.target).hide();
      });
    </script>
  </body>
</html>


