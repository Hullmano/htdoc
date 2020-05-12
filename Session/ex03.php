<?php 

session_id('kd7dv15ldli7ll34q3jqn9ks7d'); //inicia a pág. com uma sessão específica.

require_once("config.php");

echo session_id();       //mostra o id criado, para cada sessão no servidor.

session_regenerate_id(); //gera outro id de sessão.

echo '<br>';

var_dump($_SESSION);     //mostra os dados da sessão.

 ?>