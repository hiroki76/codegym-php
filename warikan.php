<?php
//合計算出
function sum ($cart) {
    $sum = 0;
    $ar1 = $cart['cart'];
    for($i = 0; $i < count($ar1); $i++){
        $ar2 = $ar1[$i];
        $sum = $sum + ($ar2['個数'] * $ar2['単価']);
    }
    //var_dump($c);
    /* ここにコードを追加しましょう */
    return $sum;
}

//1人あたりの金額算出
function moneyPerPerson ($sum, $people) {
    $per = $sum / $people['people'];
    $per = ceil($per);
    /* ここにコードを追加しましょう */
    
    return $per;
}

const JSON_FILE = './warikan.json';    //JSONファイル

$json = file_get_contents('./warikan.json');
if ($json === false) {
    echo 'ファイル入力エラー: ' . JSON_FILE . 'が見つかりません。';
}
$warikan = json_decode($json, true);

//合計
$sum = sum($warikan);
//1人辺りの金額
$per = moneyPerPerson($sum,$warikan);

echo '合計金額は' . $sum . '円です。';
echo '<br>';
echo '1人あたりの金額は' . $per . '円です。';

