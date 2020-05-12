<?php 

$cliente = array(
	'nome'=>'ana',
	'idade'=> 40,
	'genero'=>'fem'
);

foreach ($cliente as $key => &$value) {					    //quando usa "&" antes da var. é buscada a ref. da var. e o que for feito dentro da função altera seu valor, lá fora.
	if (gettype($value) === 'integer') $value += 1;			//gettype - retorna o tipo do dado.(int,string,etc.)
		echo $key." - ".$value."<br>";
}

print_r($cliente);
//echo json_encode($cliente);

 ?>