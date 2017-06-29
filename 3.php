<?php


$arr = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($arr as $item) {
    $result += $item * $item;
}
echo "cумма квадратов элементов массива [1, 20, 15, 17, 24, 35] равна $result";