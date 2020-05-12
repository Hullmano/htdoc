<?php 

$nameDir = "images";

if (!is_dir($nameDir)) {  //is_dir - testa se o diretório existe. "!" - negação.
	
	mkdir($nameDir);      //mkdir - cria diretórios.
	echo "Diretório Criado com Sucesso!";
} else {

	rmdir($nameDir);     //rmdir - remove diretórios.
	echo "O Diretório $nameDir já Existia. E foi removido!";
}

 ?>