<?php 

$def = date("w");  //Retorna dia da semana, em número.
echo "$def <br>";

$abc = $_GET["a"];

//echo "$abc";

switch ($abc) {
	case 1:
		echo "Igual 1";
	break;
	
	case 2:
		echo "Igual 2";
	break;

	case 3:
		echo "Igual 3";
	break;	

	default:
		echo "Diferente de Todos";
	break;
}	
 ?>