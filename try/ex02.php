<?php 

function teste($name) {

	if (!$name) {

		throw new Exception("Nenhum Nome.", 1);
	}

	echo ucfirst($name)."<br>";

}

try {
	
	teste("tiao");         //teste correto, passando um var. name.
	teste("");             //teste incorreto, ñ foi passado a var. name. Por isso entra no catch.

} catch (Exception $e) {
	
	echo $e->getMessage()."<br>";
	echo $e->getCode();

} finally {

	echo "<br>"."Oi";     //- opcional. Independente dos retornos, esta linha é executada.

}


 ?>