<?php 

$data = array(
	"nome"=>"Tiao",
	"idade"=>32
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);  // - ("nome_do_cookie", "dados_para_armazenamento", "tempo_duração").

echo "Ok";

 ?>