<?php 

function soma(int ...$vals){        //posso determinar o tipo de var. para a função. ...$var - declaração genérica de var.

	return array_sum($vals);

}

var_dump(soma(2,3,4));
echo "<br>";
echo soma(2.5,3.6);                //como foi definido o tipo de var., aqui pegou só o inteiro.
echo "<br>";
echo "<hr>"
;
/*-----------------------------------------------------------------------------------------------------------------------*/

function calc(float ...$vals):float { //:float(ou string, etc.) posso determinar o tipo do retorno da função.

	return array_sum($vals);

}

var_dump(calc(2,3,4));
echo "<br>";
echo calc(2.5,3.6);                //como foi definido o tipo de var., aqui pegou só o inteiro.
echo "<br>";

?>