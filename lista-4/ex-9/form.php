<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $horario = $_GET["horario"];
    $error = 0;
    if(empty($nome or $horario)){
        $error = 1;
        echo "<h3>Preencha as informações.</h3><br>";
    }
    if($error == 0){
        $hora = (int) substr($horario,0,2);
        if($hora <= 12){
            echo "<h3>Bom dia, ".$nome.".</h3><br>";
        }
        else if($hora <= 18){
            echo "<h3>Boa tarde, ".$nome.".</h3><br>";
        }
        else {
            echo "<h3>Boa noite, ".$nome.".</h3><br>";
        }
    }
    ?>
</body>
</html>