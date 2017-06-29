<?php
$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
foreach ($arr as $key=>$item){
    if ($key==5 or $key==6){
        echo "<b>$item</b>";
    }else{
        echo $item;
    }
    echo "<br>";

}