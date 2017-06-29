<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];
$i = 0;
foreach ($arr as $key => $item){
    $en[$i]=$key;
    $ru[$i]=$item;
    $i++;
}
print_r($en);
print "<br>";
print_r($ru);