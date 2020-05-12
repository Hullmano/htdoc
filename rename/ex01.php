<?php 

date_default_timezone_set("America/Fortaleza");

/*
$varHour = strtotime("-3 hours");           //testes com data.
echo date("l, d-m-Y H:m:i", $varHour);	

echo "<hr>"; */
//------------------------------------------------
$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)) {

	$file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");

	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);

}

rename(                                    // - move arquivos de uma pasta para outra.
	$dir1.DIRECTORY_SEPARATOR.$filename,
	$dir2.DIRECTORY_SEPARATOR.$filename
);

echo "Arquivo Movido com Sucesso!"

?>