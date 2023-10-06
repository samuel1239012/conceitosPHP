<?php

//funções de manipulação de array

/*
array_push — Adiciona um ou mais elementos no final de um array
array_pop — Extrai um elemento do final do array
array_shift — Retira o primeiro elemento de um array
array_unshift — Adiciona um ou mais elementos no início de um array
array_splice — Remove uma parte array e a substitui por outra coisa
count — Conta o número de elementos de uma variável, ou propriedades de um objeto

*/

$array = [];//representa o valor da variavel array vazia

array_push($array, "Senac", "TAU");

array_push($array, ["Igor", "Samuel","Evelyn", "Matheus", "Estevan"]);
array_push($array [2], "Cauã");

array_push($array, "teste");

echo"<pre>"; // formata o modo de apresentação da saida
print_r($array); // mostra o conteúdo simplificado do array
echo"</pre>";

echo"<br> A variavel array possui ".count($array). " posições.";

array_pop($array);

// array_shift($array);

// array_unshift($array);



// echo"<pre>"; // formata o modo de apresentação da saida
// print_r($array); // mostra o conteúdo simplificado do array
// echo"</pre>";

// echo"<pre>"; // formata o modo de apresentação da saida
// print_r($array); // mostra o conteúdo simplificado do array
// echo"</pre>";

echo"<pre>"; // formata o modo de apresentação da saida
print_r($array); // mostra o conteúdo simplificado do array
echo"</pre>";

array_splice($array,1,1,[["Teste 1", "Teste 2"]]);

echo"<pre>"; // formata o modo de apresentação da saida
print_r($array); // mostra o conteúdo simplificado do array
echo"</pre>";

?>


<!-- array_splice(
    array &$array,
    int $offset,
    ?int $length = null,
    mixed $replacement = []
 ): array --> <!--como funciona o array_splice -->