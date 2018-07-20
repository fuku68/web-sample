<html>
<head>
  <meta charset="utf-8">
  <title>Syllabusサンプル</title>
  <style>
    .code {
      width: 300px;
      background-color: #cccccc;
      padding: 5px;
      margin: 15px;
    }
  </style>
</head>
<body>
  <h1>ネットワーク環境の確認</h1>
  <p>
準備：プログラム検索から"cmd"を検索してコマンドプロンプトを開く
  </p>
  <p>ネットワーク環境の確認</p>
  <p class="code">
# Windows</br>
&gt;ipconfig /all</br>
</br>
# Mac</br>
&gt;ifconfig -a
  </p>

  <p>DHCPリリース</p>
  <p class="code">
# Windows</br>
&gt;ipconfig /release</br>
</br>
# Mac</br>
&gt;sudo ipconfig set en0 DHCP
  </p>

  <p>DNS問い合わせ</p>
  <p class="code">
&gt;nslookup google.com
  </p>

  <p>DNSキャッシュ(Macなし)</p>
  <p class="code">
# Windows</br>
&gt;ipconfig /displaydns</br>
</br>
# chromeでのキャッシュ</br>
chrome://net-internals/#dns
  </p>

  <p>DNSキャッシュクリア(Macなし)</p>
  <p class="code">
# Windows</br>
&gt;ipconfig /flushdns
  </p>

  <p>
    <a href="/index.php">戻る</a>
  </p>
</body>
</html>
