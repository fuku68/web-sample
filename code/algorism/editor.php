<!DOCTYPE html>
<?php
  $title = "アルゴリズム　エディタ";
  $algo = $_GET['algo'];
  switch ($algo) {
    case "sum":
      $cont = file_get_contents("./sum.js");
      $title = "合計値";
      break;
    case "avg":
      $cont = file_get_contents("./avg.js");
      $title = "平均値";
      break;
    case "max":
      $cont = file_get_contents("./max.js");
      $title = "最大値";
      break;
    case "swap":
      $cont = file_get_contents("./swap.js");
      $title = "データの交換";
      break;
    case "linear_search":
      $cont = file_get_contents("./linear_search.js");
      $title = "リニアサーチ（線形探索法）";
      break;
    case "binary_search":
      $cont = file_get_contents("./binary_search.js");
      $title = "バイナリサーチ（二分探索表）";
      break;
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
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/ace-css/css/ace.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/mode-javascript.js" crossorigin="anonymous"></script>
    <style type="text/css" media="screen">
      #editor { 
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        height: 400px;
      }
    </style>
    <title><?php print $title ?></title>
  </head>
  <body>
    <div class="container">
      <h1><?php print $title ?></h1>
      <p>
        <button type="button" class="btn btn-default" onclick="onClick();"><span class="glyphicon glyphicon-play" aria-hidden="true"></span>実行</button>
        <button type="button" class="btn btn-default" onclick="location.href='/index.php'"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>戻る</button>
      </p>
      <div id="editor"><?php print htmlentities($cont); ?></div>
      <h1>結果</h1>
      <p id="output"></p>
    </div>

    <script>
      var editor = ace.edit("editor");
      editor.setTheme("ace/theme/monokai");
      var JavaScriptMode = ace.require("ace/mode/javascript").Mode;
      editor.getSession().setMode(new JavaScriptMode());

      onClick = function() {
        var program = editor.getValue();
        var out = eval(program);
        if (!out) {
          out = "";
        }
        $('#output').text(out.toString());
      };
    </script>
  </body>
</html>

