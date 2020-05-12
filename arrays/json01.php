<?php 

$cliente = array('ana'=>'Diz oi!','joao'=>'Diz tchau!');

//array_push($cliente, 'adao');
array_push($cliente, array(
	'adao'=>'Diz hello!',
	'tiago'=>'Diz bye!',

	'tiao'=>'tem 20 anos!',
	'mauro'=>'tem 30 anos!',	
));

//print_r($cliente);
echo json_encode($cliente);      //transforma o array em json. Estruturado.
 ?>