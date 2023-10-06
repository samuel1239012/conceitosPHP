<?php
/*
1- crie uma variavel do tipo array com o nome frutas
    esse array deve ter os seguintes elementos
    mamão, maçã, melão
2- Utilizando as funções da array faça;
    a- inclusão de uma nova fruta no inicio do array; 
    b- inclusão de uma nova fruta no final do array;
    c- exclusão da fruta que esta na posição 1;
    d- exclusão da fruta que está na ultima posição do array;
    e-exclusão da fruta que está na posição 01 por maracujá.

3- a cada alteração no array um realize print_r ou var_dump
    para comprovar os resultados obtidos.
*/

$fruta = [];

array_push($fruta, "mamão", "maçã", "melão");

echo"<pre>"; // formata o modo de apresentação da saida
print_r($fruta); // mostra o conteúdo simplificado do array
echo"</pre>";

array_unshift($fruta, "melancia");

echo"<pre>"; // formata o modo de apresentação da saida
print_r($fruta); // mostra o conteúdo simplificado do array
echo"</pre>";

array_push($fruta, "pera");

echo"<pre>"; // formata o modo de apresentação da saida
print_r($fruta); // mostra o conteúdo simplificado do array
echo"</pre>";

?>