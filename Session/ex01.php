<?php 

//session_start();
require_once("config.php");  //chama os comandos do aquivo config.php.

$_SESSION["nome"] = "Adão";
$_SESSION["sobren"] = "Thiago";

echo "Sessão Criada!";

 ?>