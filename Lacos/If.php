<?php 

$maior = 19;
$menor = 17;
$igual = 18;
$idade = 18;

if ($idade < $menor) {
	echo "Não Menor";
} else if ($idade = $igual) {
	echo "Não Igual";
} else {
	echo "Não Maior";
}
 
echo "<br>";

echo ($idade < $maior)?"Não é de Maior":"É de Maior"; //Método de comparação simples.

 ?>