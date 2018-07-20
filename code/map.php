<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Syllabusサンプル</title>
    <style>
      #maps{
        height: 400px;
      }
    </style>
  </head>
  <body>
    <p>
      <a href="/index.php">戻る</a>
    </p>
    <div id="maps"></div>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBHuBDnGZjpF1kbORCrw4CzWU6DMnwnzxk&callback=initMap" async></script>
    <script>
      function initMap() {
        var mapPosition = {lat: 35.170662, lng: 136.923430}
        var mapArea = document.getElementById('maps');
        var mapOptions = {
          center: mapPosition,
          zoom: 16,
        };
        var map = new google.maps.Map(mapArea, mapOptions);
      }
    </script>
  </body>
</html>
