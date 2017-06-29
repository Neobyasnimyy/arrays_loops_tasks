<?php
$n = 1000;
$num = 0;
while ($n > 50){
    echo "$n / 2 равно ",$n/2;
    print "<br>";
    $n = $n / 2;
    $num++;
}
echo $num, " итераций";