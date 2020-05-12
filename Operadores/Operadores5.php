<?php 

$a = 1;

echo $a++; //Incremento; Neste echo mostra a var. e depois incrementa.

echo "<br>";

echo ++$a; //Incremento; Neste a var. é incrementada e depois é mostrada.

echo "<br>";

var_dump($a);

echo "<br>";
echo "<br>";

///////////////////////////////////////////////////

$resultado1 = (10 + 3) / 2 > 5 && 10 + 5 < 3;  //&& - Comparação "and", as 2 condiç. tem que serem verdadeiras.

$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;  //|| - Comparação "or", apenas 1 das condiç. precisa ser verdadeiras.

var_dump($resultado1);

echo "<br>";

var_dump($resultado2);

 ?>