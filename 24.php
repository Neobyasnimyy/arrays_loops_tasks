<?php
$number = (string)6645456978;
$num = 6;
$k = 0;
for ($i=0;$i<strlen($number);$i++){
    if ($number[$i]==$num){
        $k++;
    }
}
echo "Число вхождений цыфры $num равно $k";