<?php

echo $nome = "Oi";
//echo $nome = "Oi <br>";  //Posso colocar o <br> na mesma linha; E colocar o echo já declarando a var.

echo "<br>";

echo $sobrenome = "Tchau <br>";

$nome .= " GoodBye";

echo $nome;

/////////////////////////////////

echo "<br>";
echo "<br>";

$valTotal = 0;

$valTotal += 100;  //Adição

$valTotal += 50;

$valTotal *= 2;	   //Multiplicação

$valTotal -= 100;  //Subtração

$valTotal /= 2;    //Divisão

$valDesc = $valTotal * .9; //Multiplicação outra Var. (Ex. de %)

echo "Val Total = " . $valTotal;

echo "<br>";

echo "Val Desc = " . $valDesc;

?>