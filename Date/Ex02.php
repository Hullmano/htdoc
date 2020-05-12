<?php 

$dt = new DateTime();               //Chama classe DateTime. Que mostra data e hora.

$addPer = new DateInterval("P10D"); //Chama classe DateInterval. Que acrescenta um intervalo à data escolhida.

$dt -> add($addPer);                //Chama um método da classe DateInterval, add o periódo escolhido. Ex: P10D.

echo $dt -> format("d/m/Y H:i:s");  //Formata a data e a hora, chamando um método da classe DateTime.


date_default_timezone_set("America/Sao_Paulo"); //Seta fuso horário.
 ?>