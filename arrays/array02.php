<?php 

$cliente = array('ana'=>'Diz oi!','joao'=>'Diz tchau!');

//array_push($cliente, 'adao');
array_push($cliente, array(
	'adao'=>'Diz hello!',
	'tiago'=>'Diz bye!',

	'tiao'=>'tem 20 anos!',
	'mauro'=>'tem 30 anos!',	
));
print_r($cliente['ana']);         //para o primeiro array/vetor ñ é preciso colocar o núm. do vetor.
echo "<hr>";
print_r($cliente[0]['mauro']);	  //para o segundo array/vetor é preciso colocar o núm. do vetor.
echo "<hr>";
echo "<strong>TIAO</strong> ".$cliente[0]['tiao'];
echo "<hr>";
echo "<em>Ana</em> ".$cliente['ana'];
 ?>