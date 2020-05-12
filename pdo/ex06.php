<?php 

$conct = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$conct -> beginTransaction();

//$stmt = $conct -> prepare("DELETE FROM tb_user WHERE id = :ID"); 
$stmt = $conct -> prepare("DELETE FROM tb_user WHERE id = ?");  //? - fica no lugar de uma var.

$ident =  3;

//$stmt -> bindParam(":ID", $ident);

$stmt -> execute(array($ident)); //array - qdo utilizada, busca na sequência os "?" e atribui o val. da var. no array.

//$conct -> rollback();            //cancela a execução do DELETE.
$conct -> commit();                //confirma a execução do DELETE.

echo "Deleted!";

 ?>