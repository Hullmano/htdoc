<?php 

if (isset($_COOKIE["NOME_DO_COOKIE"])) {

	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);   //como ñ coloquei o param. "true", no json_decode. O retorno foi um objeto. 

	echo $obj->nome;                                  //desta forma eu acesso um campo do objeto.
}

 ?>