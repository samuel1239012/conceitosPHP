    <h2>Operadoes de atribuição</h2>

    <?php
    
    /*

    $a += $b	$a = $a + $b	Addition
    $a -= $b	$a = $a - $b	Subtraction
    $a *= $b	$a = $a * $b	Multiplication
    $a /= $b	$a = $a / $b	Division
    $a %= $b	$a = $a % $b	Modulus
    $a **= $b	$a = $a ** $b	Exponentiation

    $a +=3 $a = $a +3 Adição

    */

    echo"<h3>Exemplos</h3>";
    $a = 5;
    $b = 3;
    $c = '5';

    echo"Atribuição com soma : ". $a +=3 ;//8
    echo"<br>Atribuição com subtração : ". $a -=2 ;//6
    echo"<br>Atribuição com multilicação : ". $a *=5 ;//30
    echo"<br>Atribuição com divisão : ". $a /=10 ;//3
    echo"<br>Atribuição com modulo : ". $a %=2 ;//1
    echo"<br>Atribuição com exponenciação : ". $a **=1024 ;//1



    ?>
