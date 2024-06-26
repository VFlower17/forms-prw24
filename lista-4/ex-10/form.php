<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $psize = $_GET["pequena"];
    $msize = $_GET["media"];
    $gsize = $_GET["grande"];
    $total = 0;
    if(empty($psize)){
        $psize = 0;
    }
    if(empty($msize)){
        $msize = 0;
    }
    if(empty($gsize)){
        $gsize = 0;
    }
    $valorp = 10 * $psize;
    $total += $valorp;
    $valorm = 12 * $msize;
    $total += $valorm;
    $valorg = 15 * $gsize;
    $total += $valorg;

    echo "<h3>Arrecadação total: R$".number_format($total,2,'.','');
    ?>
</body>
</html>