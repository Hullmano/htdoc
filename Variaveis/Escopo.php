<?php

$nome = "José";

function teste1() {  //Função.

	global $nome;	 //Global - chama a var. de fora do escopo.	
	echo $nome;

}

function teste2() {

	echo $nome = "José" . " no teste 2";
	//echo $nome;

}

teste1();

echo "<br/>";

teste2();

?>