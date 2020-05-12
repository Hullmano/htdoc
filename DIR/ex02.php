<?php 

$imagens = scandir("images");   //mostra o que está dentro da pasta. retorna um array.
$json = array();
//print_r($imagens);

foreach ($imagens as $key) {                 //no caso de arquivos, chave $key - é o nome do arquivo.
	if (!in_array($key, array(".",".."))) {  //in_array - faz uma busca no array. 1º atrib. onde procurar. 2º o que procu.

		$filename = "images".DIRECTORY_SEPARATOR.$key;

		$info = pathinfo($filename);         //pathinfo - retorna um array com inf. do arquivo.

		$info["size"] = filesize($filename); //$info["$key"] - adiciono um chave($key) ao array $info. filesize - retorna o tamanho do arquivo.

		$info["modified"] = date("d-m-Y H:m:s",filemtime($filename));   //filemtime - retorna o timestamp da última modificação do arquivo. Usando a func. date("d/m/Y H:m:s") - formatamos a data.

		//$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";     //retorna a url
		$info["url"] = "http://localhost:81/DIR/".str_replace("\\", "/", $filename);  //str_replace - substitui caracteres.

		array_push($json, $info);
	}
	
}
echo json_encode($json);
//print_r($json);

 ?>