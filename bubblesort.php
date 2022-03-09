<?php
$nums = [100, 5, 2, -10, 8, 10, -1, 15, 1, -100];

// ここにコードを書きましょう
// ここでbubblesort関数を呼び出します
$nums = bubblesort($num);

echo '<pre>';
print_r($nums);
echo '</pre>';

/* 関数を完成させましょう */
function bubblesort($num) {
    foreach($nums as $key => $value){
        if($nums[$key] = $nums[$key] >= $nums[$key+1]){
            
        }
        $num = $nums % $key;
    }
    
    return $num;
    
}
