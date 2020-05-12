<?php 

require_once("config.php");

$sql = new Sql();

$csv = $sql->select("SELECT * FROM tb_user ORDER BY id");

$titles = array(); 

foreach ($csv[0] as $key => $value) {    //percore a 1º posiação do array.
	array_push($titles, ucfirst($key));  //ucfirst - 1º letra maiúscula.
}

//Criando arquivo.
$file = fopen("users.csv", "w+");

fwrite($file, implode(",", $titles) . "\r\n");
//!Criando arquivo.

foreach ($csv as $row) {		        //percorre linha por linha
	$data = array();

	foreach ($row as $key => $value) {  //percorre as colunas dentro das linhas.
		array_push($data, $value);
	}

	fwrite($file, implode(",", $data) . "\r\n");
}

fclose($file);

//print_r($titles);
//echo json_encode($titles);
//echo implode(",", $titles);   //implode - transf. array em string, incluindo um separador desejado. Aqui ",".

 ?>