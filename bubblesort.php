<?php
$nums = [100, 5, 2, -10, 8, 10, -1, 15, 1, -100];

// ここにコードを書きましょう
// ここでbubblesort関数を呼び出します
$hoge = bubblesort($nums);

echo '<pre>';
print_r($hoge);
echo '</pre>';

/* 関数を完成させましょう */
function bubblesort($num) {

   for($i = 0; $i < count($num); $i++) {
    for($j = $i; $j < count($num); $j++){
      if($num[$i] > $num[$j]){
         $hoge = $num[$i];
         $num[$i] = $num[$j];
         $num[$j] = $hoge;
      }
    }
  }
  return $num;
}

