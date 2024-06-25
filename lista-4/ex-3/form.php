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
    $estado = $_GET['estado'];
    $capital = array(
        'AC' => 'Rio Branco',
        'AL' => 'Maceió',
        'AP' => 'Macapá',
        'AM' => 'Manaus',
        'BA' => 'Salvador',
        'CE' => 'Fortaleza',
        'DF' => 'Brasília',
        'ES' => 'Vitória',
        'GO' => 'Goiânia',
        'MA' => 'São Luís',
        'MT' => 'Cuiabá',
        'MS' => 'Campo Grande',
        'MG' => 'Belo Horizonte',
        'PA' => 'Belém',
        'PB' => 'João Pessoa',
        'PR' => 'Curitiba',
        'PE' => 'Recife',
        'PI' => 'Teresina',
        'RJ' => 'Rio de Janeiro',
        'RN' => 'Natal',
        'RS' => 'Porto Alegre',
        'RO' => 'Porto Velho',
        'RR' => 'Boa Vista',
        'SC' => 'Florianópolis',
        'SP' => 'São Paulo',
        'SE' => 'Aracaju',
        'TO' => 'Palmas'
    );

    echo "<h3>Capital: ".$capital[$estado]."</h3><br>";
    ?>
</body>
</html>