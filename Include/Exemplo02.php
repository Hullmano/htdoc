<?php 

//include "Exemplo01.php";   //include - chama o aquivo escolhido. Se tiver entra pasta, mostrar o caminho correto, ex: c:\php\exemplo01.php.
require "Exemplo01.php";
//Difer. entre include e require - inc. chama arquivos do include.info e executa sem verificar se o arq. existe ou se tem algum erro. O req. verifica a existência do arquivo e se tem algum erro. A variação include_once e require_once evita que a função seja chamada 2 vezes.

$result1 = multi(2, 5);
$result2 = div(10, 3);

echo "O Resultado Multiplicação é: $result1.";
echo "<br>";
echo "O Resultado da Divisão é: $result2";	

 ?>