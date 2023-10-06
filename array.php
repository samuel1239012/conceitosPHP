<?php


$array01=['SENAC',20,TRUE,['teste','posição array']];
//          0      1   2     3
//                             0        1           

echo"<pre>";
var_dump($array01);
echo"</pre>";

echo"<p>";

echo"<pre>";
print_r($array01);
echo"</pre>";

echo"<br>Posição 0 do array01: " . $array01[0];
echo"<br>Posição 1 do array01: " . $array01[1];
echo"<br>Posição 4 do array01: " . $array01[3][0];
echo"<br>Posição 2 do array01: " . $array01[2];
echo"<br>Posição 4 do array01: " . $array01[3][1];


?>