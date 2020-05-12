<?php 

$json = 
'{"ana":"Diz oi!","joao":"Diz tchau!","0":{"adao":"Diz hello!","tiago":"Diz bye!","tiao":"tem 20 anos!","mauro":"tem 30 anos!"}}';

$var = json_decode($json, true);      //transforma o json em array, novamente.

//var_dump($var);
print_r($var);
 ?>