<?php 

$conn = new mysqli("127.0.0.1", "root", "root", "dbphp7");//faz a conexão com BD.

if ($conn -> connect_error){						 	  //testa se há algum erro.
	echo "Error:" . $conn -> conect_error;
} else {
	echo "Connected!";
}

$result = $conn -> query("SELECT * FROM tb_user ORDER BY login"); //faz busca/seleção no BD.

$data = array();

while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {     //para mostrar o resultado da pesquisa. Qdo add MYSQLI_ASSOC, 
	//var_dump($row);  								      //trás no resultado somente os nomes de colunas e não os índices.
	
	array_push($data, $row);                              //array_push insere dados em uma array.
}

echo json_encode($data);                                  //formata para json

?>