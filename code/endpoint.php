<?php
  $url = 'http://weather.livedoor.com/forecast/webservice/json/v1?city='; 
  if(isset($_GET['location'])) {
    $location = $_GET['location'];

    // curl
    $curl = curl_init($url . $location);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET'); // メソッド指定
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 証明書の検証を行わない
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // レスポンスを文字列で受け取る

    $response = curl_exec($curl);
    print($response);
  } else {
    header("HTTP/1.1 404 Not Found");
  }
?>
