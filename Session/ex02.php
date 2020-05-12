<?php 

//session_start();
require_once("config.php");

session_unset("nome");  //apaga variáveis da sessão. Neste caso apaga a var. específica "nome". Caso ñ especifique uma var. o comando apaga TODAS. A sessão no servidor continua ativa.

session_destroy();      //apaga var. da sessão. E a sessão é finalizada, o usuário é excluído do servidor.

echo $_SESSION["nome"];

 ?>