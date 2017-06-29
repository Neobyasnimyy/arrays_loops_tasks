<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9,];
$k = 1;
foreach ($arr as $item){
    echo "$item,";
    if($k%3==0){
        echo "<br>";
    }
    $k++;
}