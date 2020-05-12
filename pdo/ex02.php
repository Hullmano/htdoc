<?php 

$conct = new PDO("mysql:dbname=dbphp7;host=localhost","root","root"); 

$stmt = $conct -> prepare("INSERT INTO tb_user (login, senha) VALUES(:LOGIN, :PASS)"); //faz um insert na tabela. ":LOGIN, :PASS" - são var. criadas para inserir os val.

$login = "tiao";
$passw = "0909";

$stmt -> bindParam(":LOGIN", $login); //seta o val. na var.(VALUES)
$stmt -> bindParam(":PASS", $passw);

$stmt -> execute();                   //executa o prepare.

echo "Dados Inserdos!";
 ?>