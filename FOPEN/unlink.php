<?php 

$file = fopen("teste.txt", "w+");

fwrite($file, "Goob Morming!");

fclose($file);

unlink("teste.txt");    //exclui arquivo.

 ?>