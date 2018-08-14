// 検索するソート済みの配列データです
var a = [1,2,4,5,10];
// 探す値です
var searchValue = 4;
// 見つかったデータの配列番号です。初期値は、エラーの値(-1)にしておきます
var findID = -1;

// 調べる左端の番号です
var left = 0;
// 調べる右端の番号です
var right = a.length-1;
// 調べる左端と右端の間にデータがある間は、くり返します
while(left <= right) {
  // 左右の真ん中の番号を調べる位置にします
  middle = Math.floor((left + right) / 2);
  // 調べる位置の値と、探す値を比較して
  if (a[middle] == searchValue) {
    // 同じなら、その番号を保存してくり返しを終了します
    findID = middle;
    break;
  } else if (a[middle] < searchValue) {
    // 探す値より小さければ、そこより左に探すデータはないので、左端を移動します
    left = middle + 1;
  } else {
    // 探す値より大きければ、そこより右に探すデータはないので、右端を移動します
    right = middle - 1;
  }
}

// 検索結果を表示します
alert(" 見つかった番号 ="+findID);
