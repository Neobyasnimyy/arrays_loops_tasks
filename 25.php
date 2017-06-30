<?php
$arr = [];
for($i=0; $i<5; $i++) {
    $arr[$i] = rand(0,5);
}

print_r($arr);
echo "<br>";
//foreach ($arr as $item){
//    echo $item,"<br>";
//}
$min = $arr[0];
$min_index=0;
for ($i=1;$i<count($arr);$i++){
//    находит первый минимальный элемент
    if ($min>$arr[$i]){    //если поставить условие ($min>=$arr[$i]) будет находить последний min
        $min = $arr[$i];
        $min_index=$i;
    }
}
//echo "min $min и индекс $min_index";

$max = $arr[0];
$max_index=0;
for ($i=1;$i<count($arr);$i++){
//    находит первый максимальный элемент
    if ($max<$arr[$i]){    //если поставить условие ($min>=$arr[$i]) будет находить последний min
        $max = $arr[$i];
        $max_index=$i;
    }
}
//echo "max $max и индекс $max_index";




// Решение задачи
// функция находит первое минимальное и первое максимальное значение и меняет их местами
function array_min_max_castling(array $array){
    if (is_array($array)){
        $min = $array[0];
        $min_index=0;
        for ($i=1;$i<count($array);$i++){
            //    находит первый минимальный элемент
            if ($min>$array[$i]){    //если поставить условие ($min>=$arr[$i]) будет находить последний min
                $min = $array[$i];
                $min_index=$i;
            }
        }

        $max = $array[0];
        $max_index=0;
        for ($i=1;$i<count($array);$i++){
            //    находит первый максимальный элемент
            if ($max<$array[$i]){    //если поставить условие ($min>=$arr[$i]) будет находить последний min
                $max = $array[$i];
                $max_index=$i;
            }
        }
        $array[$min_index]=$max;
        $array[$max_index]=$min;
        return $array;

    }else{
        return "Type is error!!";
    }
}
echo "<br><hr>";
print_r(array_min_max_castling($arr)) ;
