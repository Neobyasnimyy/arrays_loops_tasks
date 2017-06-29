<?php
$arr = ['January', 'February', 'March','April','May',
    'June','July','August','September','October','November','December'];
$month = date("F");
foreach ($arr as $item){
    if ($item == $month){
        echo "<b>$item</b>";
    }else{
        echo $item;
    }
    echo "<br>";
}