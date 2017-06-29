<?php

include 'get.html';
$number = $_GET['number'];
$result = 0;
for ($i=0;$i<strlen($number);$i++){
    $result+= (int)$number[$i];
}
echo "<br>";
echo "Сумма цыфр 1 строки равна $result";

$number2 = $_GET['number2'];
$result2 = 0;
if (is_numeric($number2)){
    for ($i=0;$i<strlen($number2);$i++){
        $result2+= (int)$number2[$i];
    }
    echo "<br>";
    echo "Сумма цыфр 2 строки равна $result2";
}else{
    echo "<br>";
    echo "Необходимо ввести числа во 2 строке";
}

