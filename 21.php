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
        for ($i=1;$i<=9;$i++){
            echo str_repeat("$i",$i),"<br>";
        }
    ?>
</body>
</html>