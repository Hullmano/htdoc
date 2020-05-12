<?php 

function addFile($file) {

	if (file_exists($file.".php") === true) {
		
		require_once($file.".php");

	} else if (file_exists("autoload" . DIRECTORY_SEPARATOR . $file . ".php") === true) {
		
		require_once("autoload".DIRECTORY_SEPARATOR.$file.".php");
	}
}

spl_autoload_register("addFile");

$RG = new Documento();
$gato = new Jacare();
 ?>