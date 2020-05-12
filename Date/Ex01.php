<?php 

echo date("d/m/Y H:i:s");  //Pega a Data e Hora;

echo "<br>";

echo time(); //Pega timestamp. Núm. inteiro desde 1/1/1970           

echo "<br>";

//$ts = strtotime("2019-11-12"); //Transf. um texto em data.
//$ts = strtotime("now");        //Busca data de hoje.
$ts = strtotime("+1 days");      //Soma data de hoje + 1.
echo date("l, d/m/Y", $ts);      //Formata a data.

echo "<br>";

/////////////////////////////////////////////////////////////////////////////////////////

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //Trás data para local atual e não do servidor.

echo ucwords(strftime("%A - %B"));//Mostra data.

 ?>