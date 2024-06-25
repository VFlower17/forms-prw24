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
    $nome = $_GET['nome'];
    $n1 = $_GET['nota1'];
    $n2 = $_GET['nota2'];
    $frequencia = $_GET['freq'];

    $erro = 0;
    if(empty($nome)){
        echo "<h3>Identifique o aluno.</h3><br>";
        $erro = 1;
    }
    if(empty($n1 or $n2 or $frequencia)){
        echo "<h3>Preencha todas as informaçoes do aluno.</h3><br>";
        $erro = 2;
    }
    if($erro == 0){
        $media = ($n1 + $n2)/2;
        if($media >= 5 and $frequencia >= 75){
            echo "<h3>Aprovado.</h3><br>";
        }
        else if($media < 5 and $frequencia >= 75){
            echo "<h3>Reprova por nota.</h3><br>";
        }
        else if($media < 5 and $frequencia < 75){
            echo "<h3>Reprova por nota e frequencia.</h3><br>";
        }
        else if($media >= 5 and $frequencia < 75){
            echo "<h3>Reprova por frequencia.</h3><br>";
        }
    }

    ?>
</body>
</html>