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
        $texto = $_GET['texto'];
        $bio = $_GET['bio'];
        $cbox = $_GET['chbx'];
        $rad = $_GET['rad'];
        $opcao = $_GET['sel'];
        $erro = 0;

        if(empty($texto or $bio or $cbox)){
            echo "<h3>Preencha/marque todos os campos para obter as informações</h3><br>";
            $erro = 1;
        }
        if($erro == 0){
            echo "<h3>Caixa de texto de uma linha: ".$texto."</h3><br>";
            echo "<h3>Caixa de texto de rolagem: ".$bio."</h3><br>";
            if($cbox == "true"){
                echo "<h3>Check Box marcada: ".$cbox."</h3><br>";
            }
            if($rad == "true"){
                echo "<h3>Botao de opcao marcado: ".$rad."</h3><br>";
            }
            echo "<h3>Opcao selecionada: ".$opcao."</h3><br>";
        }
    ?>
</body>
</html>