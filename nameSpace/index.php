<?php 

require_once("config.php");
use Cliente\Cadastro;

$cad1 = new Cadastro();
$cad1->setNome("Adriano Cardoso");
$cad1->setEmail("hullmano@gmail.com");
$cad1->setSenha("321");

echo $cad1;

echo "<hr>";

$cad1->setVendas("4");
echo $cad1->getVendas();
 ?>