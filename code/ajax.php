<html>
<head>
  <meta charset="utf-8">
  <title>Syllabusサンプル</title>
  <link rel="stylesheet" type="text/css" href="/css/javascript.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="/javascript/weather.js"></script>
</head>
<body>
  <p>
    <a href="/index.php">戻る</a>
  </p>
  <h1>お天気情報</h1>
  <p>
    <select name="location">
      <option value="130010" selected>東京</option>
      <option value="270000">大阪</option>
      <option value="400010">福岡</option>
      <option value="016010">札幌</option>
    </select>
    <button id="request">取得</button>
  </p> 
  <p id="result"></p>
</body>
</html>
