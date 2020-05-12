<?php 

require_once("config.php");

/*
$sql = new Sql();
$result = $sql->select("SELECT * FROM tb_user");

echo json_encode($result);
*/

/*
$user = new Usuario();
$user->findById("7");
echo $user;         //retorna o método __toString;
*/


$list = Usuario::getList();
echo json_encode($list);


/*
$part = Usuario::otherList("ao");       //método busca no campo login da tb_user por %.o.%, que signica que vai buscar todos os logins que contém a letra o.
echo json_encode($part);
*/
/*
$check = new Usuario();
$check->checkLogin("ana", "12345!");
echo $check;
*/

/*
$insert = new Usuario();
$insert->setLogin('oi');
$insert->setSenha('555');
$insert->insert();
echo $insert;
*/
/*
$upd = new Usuario();
$upd->findByid(40);
$upd->update("bruno","666");
echo $upd;
*/
/*
$deletar = new Usuario();
//for ($i=7; $i <=9 ; $i++) { 
$deletar->findByid(40);
$deletar->delete();
echo $deletar;
*/
 ?>