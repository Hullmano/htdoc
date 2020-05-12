<?php 

$frutas = array("manga","cajú","jaca");  //array com uma dimensão = vetor.

print_r($frutas);

echo "<hr>";

$cores[0][0] = "claras";              //array bidimensional ou multi-dimensional. Mais de 1 vetor.
$cores[0][1] = "verde";
$cores[0][2] = "laranja";
$cores[0][3] = "amarelo";

$cores[1][0] = "escuras";
$cores[1][1] = "preto";
$cores[1][2] = "cinza";
$cores[1][3] = "marron";

print_r($cores);

echo "<hr>";

echo $cores[0][3];

echo "<hr>";

echo end($cores[1]);                 //trás o último item do vetor desejado.

 ?>