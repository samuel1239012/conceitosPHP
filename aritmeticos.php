<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aritméticos</title>
</head>
<body>
    <h1>Aritméticos</h1>
    <form action="index.php" method="get">
    <?php
    echo "Hello World!"; //mostra na tela
    //variaveis
    // toda variavel começa com $
    $a = 10;
    $b = 20;
    $soma = $a + $b;
    echo "<br>".$soma; // HTML concatenado com variável PHP

    $sub = $a - $b;
    echo "<br>Subtração: ". $sub;


    $mult = $a * $b;
    echo "<br>Multiplicação: ". $mult;


    $div = $a / $b;
    echo "<br>Divisão: ". $div;


    $Modulo = $a % $b;
    echo "<br>Modulo: </h2>". $Modulo;

    $exp = $a ** 3;
    echo "<br>Exponenciação: ". $exp; 



?>
<br>
<br>
    <input type="submit" value="Voltar">

    <!-- <a href="index.php"><button>Voltar</button></a> -->
</body>
</html>