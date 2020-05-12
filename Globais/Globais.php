<?php

$nome = $_GET["a"];      		//$_GET - Recebe valor dentro da var. digitado na url, depois de "?".
$nome = (int)$_GET["a"]; 		//(int) - Converte var. para int.

	echo $nome;

	echo "<br/>";

	var_dump($nome);

	echo "<br/>";	

$ip = $_SERVER["REMOTE_ADDR"];  //$_SERVER["REMOTO_ADDR"] - Mostra do ip.

	echo "$ip";

	echo "<br/>";	

$script = $_SERVER["SCRIPT_NAME"]; //$_SERVER["SCRIPT_NAME"] - Mostra o Nome do programa	

	echo($script);

?>