<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = "";
foreach ($arr as $item) {
    settype($item,"string");/* конечно можно сделать это без изменения типа,но мне кажется так лучше!?*/
    $str.=$item;
}
var_dump($str);
print "<br>";

$str2='';
for ($i=0;$i<count($arr);$i++){
    $str2.=$arr[$i];
}
var_dump($str2);
print "<br>";

