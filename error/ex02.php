<?php  

error_reporting(E_ALL & ~E_NOTICE);     //mesmas config. do php.ini. Aqui posso definir quais erros quero mostrar ou ignorar.

$nome = $_GET["nome"];

echo $nome;

?>