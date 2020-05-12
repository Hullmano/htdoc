<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","root");  //conexão via PDO.

$stmt = $conn->prepare("SELECT * FROM tb_user ORDER BY login");       //seleciona os dados da tabela tb_user,via "prepare".

$stmt->execute();													  //executa o "prepare".

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);						  //"fetchAll" mostra os dados da tabela.

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>".$value. "<br>";
	}

	echo "------------------------------------<br>";
}

//var_dump($results);

 ?>