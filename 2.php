<?php

$arr = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr as $item) {
    $result += $item;
}
echo "cумма элементов массива [1, 20, 15, 17, 24, 35] равна $result";
echo "<br>";
// 2 вариант
$result2 = array_sum($arr);
echo "cумма элементов массива [1, 20, 15, 17, 24, 35] равна $result";
