<?php 

$conct = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conct -> prepare("UPDATE tb_user SET login = :LOGIN, senha = :PASS WHERE id = :ID");

$login = "maria";
$passw = "0102";
$ident =  2;

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASS", $passw);
$stmt -> bindParam(":ID", $ident);

$stmt -> execute();

echo "Changed!";

 ?>