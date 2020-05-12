<?php 

$nome = "alan daniel ";
$sobrenome = "marta";

//var_dump($nome, $sobrenome);
echo "O nome dele é: $nome";  //Qdo aspas duplas, mostra o valor da var.

echo "<br>";

//////////////////////////////////////////////////
echo strtoupper($nome);    //Função maiúscula

echo "<br>";

$nome = strtolower($nome); //Função minúscula

echo $nome;

echo "<br>";

echo ucfirst($nome);       //Função primeira letra da frase maiúsc.

echo "<br>";

echo ucwords($nome);       //Função primeira letra de cada palavra maiúsc.

echo "<br>";

$nome = str_replace("a", "u", $nome); //Função troca letra.

echo $nome;

 ?>