<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $error = 0;
    if (empty($nome or $idade)){
        $error = 1;
        echo "<h3>Preencha as informações</h3><br>";
    }
    if($error == 0){
        $dias = $idade * 365;
        echo "<h3>".$nome." viveu ".$dias." dias!</h3><br>";
    }
    ?>
</body>
</html>