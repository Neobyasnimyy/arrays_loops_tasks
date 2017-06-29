<?php

include 'post.html';
$number = $_GET['number'];
$result = 0;
for ($i=0;$i<strlen($number);$i++){
    $result+= (int)$number[$i];
}
echo "<br>";
echo "Сумма цыфр равна $result";

