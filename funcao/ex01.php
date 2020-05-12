<?php 

function calc($x=3,$y=3){
	$w = $x * $y;
	return $w;
}

echo calc();

echo "<hr>";

function string($text){
	return "Oi $text!";
}

echo string("Pai");

echo "<hr>";

function hi(){

	$args = func_get_args();        //retorna a qtdade e tipos de argum. passados na função.
	return $args;
}

var_dump(hi("oi",1));
 ?>
