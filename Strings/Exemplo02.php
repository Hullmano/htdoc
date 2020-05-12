<?php 

$frase = "Jesus Cristo Salva";

$palavra = "Cristo";

$returnPosicao = strpos($frase, "Cristo"); //Retorna a posição da palavra na frase.

echo $returnPosicao;

echo "<br>";

//$parteTexto = substr($frase, 0, 6);      
$parteTexto = substr($frase, 0, $returnPosicao); //Retorna parte da frase. Ex: da posição 0 até 6(pode se usar a var. no lugar do int).

var_dump($parteTexto);

echo "<br>";

//$parteTexto2 = substr($frase, $returnPosicao + 7, 4);
$parteTexto2 = substr($frase, $returnPosicao + strlen("Cristo"), strlen($frase));  //Neste - Subtraímos do texto $frase, a partir posição retornada mais acima(int 6), somado ao núm. de caracteres da palavra Cristo(strlen - retorna qtdade de caract. do texto). Até qtdade máx. de caract. da frase. Sendo assim, retornou logo após da posição 6(palavra Cristo) + 6 caract., até o fim da frase.

var_dump($parteTexto2);

echo "<br><br>";

var_dump(strlen($frase));

 ?>