<?php 

$a = 50;
$b = 51;

var_dump($a <=> $b);  //spaceship - Se 1º var >, então 1; Se 1º e 2º var =, então 0; Se 1º <, então -1.

 //////////////////////////////
echo "<br>";
echo "<br>";

$c = NULL;
$d = NULL;
$e = 1;
$f = NULL;

echo $c ?? $d ?? $e ?? $f;  //null collation - Retorna o primeiro val. não NULL.

 ?>