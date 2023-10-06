<?php
echo '<pre>';

var_dump($_POST);

echo '</pre>';
echo "<br>Peso: ". $peso = $_POST['peso'];
echo "<br>Altura: ".$altura = $_POST['altura'];

$altura2 = $altura * $altura;
$resultado = $peso / $altura2;
echo "<br>Resultado: $resultado";

echo'<p>';

if ($resultado <= 18.5){
    echo'abaixo do peso';
} else if ($resultado <= 24.9){
    echo'Peso normal';
} else if ($resultado <= 29.9){
    echo'Levemente acima do peso';
} else if ($resultado <= 34.9){
    echo'Obesidade grau 1';
} else if ($resultado <= 39.9){
    echo'Obesidade grau 2';
} else if ($resultado <= 40){
    echo'Obesidade grau 3';
}

?>