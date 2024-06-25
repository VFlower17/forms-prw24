<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];
    $ope = $_GET['ope'];

    $erro = 0;
    if(empty($n1 or $n2)){
        echo "<h3>Preencha todos os campos!</h3><br>";
        $erro = 1;
    }
    if($ope == "dividir"){
        if($n2 == 0){
            echo "<h3>Impossivel dividir por zero!</h3><br>";
            $erro = 2;
        }
    }
    if($erro == 0){
        if($ope == "somar"){
            $resul = $n1 + $n2;
            echo "<h3>Resultado: ".$resul."</h3><br>";
        }
        else if($ope == "subtrair"){
            $resul = $n1 - $n2;
            echo "<h3>Resultado: ".$resul."</h3><br>";
        }
        else if($ope == "dividir"){
            $resul = $n1 / $n2;
            echo "<h3>Resultado: ".$resul."</h3><br>";
        }
        else if($ope == "multiplicar"){
            $resul = $n1 * $n2;
            echo "<h3>Resultado: ".$resul."</h3><br>";
        }

    }
    ?>
</body>
</html>