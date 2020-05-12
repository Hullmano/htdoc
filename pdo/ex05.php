<?php 

$conct = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conct -> prepare("DELETE FROM tb_user WHERE id = :ID");

$ident =  2;

$stmt -> bindParam(":ID", $ident);

$stmt -> execute();

echo "Deleted!";

 ?>