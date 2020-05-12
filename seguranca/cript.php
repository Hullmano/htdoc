<?php 

define('SECRET_IV', pack('a16', 'senha'));  //definição de senha. Pack - transf. em 16bits a senha.
define('SECRET', pack('a16', 'senha'));

$data = [
	"nome"=>"AbcB"                          //conteúdo.
];

$openssl = openssl_encrypt(                 //método para encriptar.
	json_encode($data),
	'AES-128-CBC',
	SECRET,
	0,
	SECRET_IV
);

echo $openssl;                              //mostra na tela o conteúdo encriptado.

echo "<hr>";

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV); //método para desencriptar

var_dump(json_decode($string, true));       //retorna o conteúdo.

 ?>