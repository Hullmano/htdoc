<?php 

function error_handler($code, $message, $file, $line){    //função com alguns atributos.

	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"file"=>$file,
		"line"=>$line
	));

}

set_error_handler("error_handler");                       //- chamamos a função set_error_handler("nome_função");

$total = 100 / 0;
 
?>