<h2>Desvio condicional</h2>

<?php
/*
Sintaxe

if (expor)
    statement

    caso tenha somente uma linha de comando abaixo do if 
    não há necessidade de usar { }

    Para a estrutura abaixo é obrigatório o uso de { }
if (expor){
    código1
    código2
}

*/
echo"<h2>Exemplos</h2>";

$idade = 20;

    if($idade >= 18)
    echo"Você tem ". $idade. " anos, então é maior de idade!";

echo"<p>";

    if($idade >= 18){
    echo"Você tem ". $idade. " anos, então é maior de idade!";
    echo"<br>Se for preso vai dormir na cadeia!";
}

echo"<h2>Desvio condicional simples</h2>";
$idade = 15;

if ($idade >= 18)
    echo"Você tem " . $idade. " anos, entao é maior de idade";
else
    echo"Você tem " . $idade. " anos, entao é menor de idade";

echo"<p>";
if ($idade >= 18){
    echo"Você tem " . $idade. " anos, entao é maior de idade";
    echo"<br>Se for preso vai dormir na cadeia!";
}else{
    echo"Você tem " . $idade. " anos, entao é menor de idade";
    echo"<br>Se for preso, não pode dormir na cadeia!";
}

echo"<h2>Desvio de encadeado</h2>";
$idade = 5;

if ($idade >= 18)
    echo"Você tem " . $idade. " anos, entao é maior de idade";
else
    echo"Você tem " . $idade. " anos, entao é menor de idade";

echo"<p>";
if ($idade >= 18){
    echo"Você tem " . $idade. " anos, entao é maior de idade";
}else if ($idade >=6)
    echo"Você tem " . $idade. " anos, entao é maior de idade!";
else
    echo"<br>Você é bebê!!!";

echo"<p>";
if ($idade >=18){
    echo"Você tem " . $idade. " anos, entao é maior de idade";
    echo"<br>Se for preso,  pode dormir na cadeia!";
}else if ($idade >=6){
    echo"Você tem " . $idade. " anos, entao é menor de idade";
    echo"<br>Se for preso, não pode dormir na cadeia!";
}else{
    echo "Você é bebê";
}

echo"<h4>Operador Ternário</h4>";
echo"<p> O operador ternário é uma forma resumida de utilizar o IF</p>";
$idade = 6;

echo $idade<=5 ? "Você é bebê" : "Você é jovem...";

//condição ? verdadeiro : falso
    



?>
<br>
<a href="index.php"><button>Voltar</button></a></li>