<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = $_GET["sel"];
    while (true){
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $i + $num;
            echo $i ."+". $num ."=".$resultado."<br>";
        }
        echo "<br>";
        for ($j = $num; $j <= ($num + 10); $j++) {
            $resultado = $j - $num;
            echo $j ."-". $num ."=".$resultado."<br>";
        }
        echo "<br>";
        for ($k = 0; $k <= 10; $k++) {
            $resultado = $k * $num;
            echo $k ."*". $num ."=".$resultado."<br>";
        }
        echo "<br>";
        for ($l = $num; $l <= ($num * 10); $l+= $num) {
            if($num == 0){
                break;
            }
            else{
                $resultado = $l / $num;
                echo $l ."/". $num ."=".$resultado."<br>";
            }
        }
        break;
    }
    ?>
</body>
</html>