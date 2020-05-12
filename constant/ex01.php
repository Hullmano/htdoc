<?php 

define('SERVIDOR', '192.168.0.34');  //define uma constant e seu valor.

echo SERVIDOR;

echo "<hr>";

define('BANCO_DE_DADOS', [           //a constant pode conter um array.
	'192.168.1.255',
	'root',
	'root',
	'namedb'
]);

print_r(BANCO_DE_DADOS);


//outras constants pré-definidas do php.
echo "<hr>";

echo PHP_VERSION;                    //mostra a versão do php.

echo "<hr>";

echo DIRECTORY_SEPARATOR;			 //mostra a "/". que no windows é o separado de diretório. no linux "\".
 ?>