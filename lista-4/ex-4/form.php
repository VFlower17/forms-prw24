<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ano = $_GET['ano'];
    $erro = 0;
    if(empty($ano)){
        echo "<h3>DIGITE UM ANO.</h3><br>";
        $erro = 1;
    }
    if($erro == 0){
        if($ano % 4 == 0 and $ano % 100 != 0 or $ano % 400 == 0){
            echo "<h3>O ano é bissexto.</h3><br>";
        }
        else{
            echo "<h3>O ano não é bissexto.</h3><br>";
        }
    }
    ?>
</body>
</html>