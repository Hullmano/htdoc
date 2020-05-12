<?php

$nome = "João";
$num  = 12;
$nomeIdade = $nome . " Tem " . $num . " Anos";

/*echo $nome; //echo - Mostra na tela

echo "<br/>"; //<br/> - Pula uma linha 

var_dump($nome); //var_dump - Mostra o tipo de variável e tamanho 

echo "<br/>"; */

echo $nomeIdade;

echo "<br/>"; //<br/> - Pula uma linha

unset($nome); //unset - Apaga a variável

if (isset($nome)) { //if - Padrão; isset - Testa se var. está alocada
	echo "$nome";	
} else {
	echo "Variável Apagada!";
}

?>