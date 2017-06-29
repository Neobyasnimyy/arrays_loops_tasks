<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
body{
    text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $i = 0;
        echo "while";
        while ($i<=10){
            echo str_repeat('x',$i),"<br>";
            $i+=2;
        }
        echo "<br>";
        echo "for";
        for ($i=0;$i<=10;$i+=2){
            echo str_repeat('x',$i),"<br>";
        }
    ?>
</body>
</html>