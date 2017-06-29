<?php

$arr = [4, 2, 5, 19, 13, 0, 10];
$arr2 = "";
foreach($arr as $item){
    if ($item>=2 and $item<=4) {
        $arr2.=$item." ";
    }
}
if (empty($arr2)){
    echo "В массиве нет наших значений";
}else{
    echo "массыв содержит $arr2";
}
echo "<br>";
/*сокращенный вариант*/
empty($arr2)? print "В массиве нет наших значений": print "массыв содержит $arr2";