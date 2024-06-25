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
    $wid = $_GET['wid'];
    $hei = $_GET['hei'];
    $erro = 0;
    if(empty($wid or $hei)){
        echo "<h3>PREENCHA AS INFORMAÇOES!<h3><br>";
        $erro = 1;
    }
    if($erro == 0){
        $area = $wid * $hei;
        echo "<h3>Area do terreno: ".number_format($area,2,'.','')."m</h3><br>";
    }
    ?>
</body>
</html>