<?php
$arr = [];
for($i=0; $i<5; $i++) {
    $arr[$i] = rand(1,100);
}
$proizvedenie=1;
$number = "";
$number2 = "";
foreach ($arr as $key => $item){
    if ($item>0 and $key%2==0){
        $proizvedenie *=$item;
        $number.=$item." ";
    }elseif ($item>0 and $key%2==1){
        $number2.=$item." ";
    }
}
echo "Произведение чисел больше нуля с парными индексами [$number] равно $proizvedenie.<br>";
echo "Элементы больше нуля с непарными индексами [$number2].";