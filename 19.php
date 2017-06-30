<?php
$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$day = date("N");
foreach ($arr as $key=>$item){
    if ($key==$day-1){
        echo "<b>$item</b>";
    }else{
        echo $item;
    }
    echo "<br>";
}
