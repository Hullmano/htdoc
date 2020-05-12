<?php 

$filename = "users.csv";

if (file_exists($filename)) {

	$file = fopen($filename, "r");

	$headers = explode(",",fgets($file));    //fgets - faz a leitura linha por linha do arquivo. explode - ao contrário do implode, transf. uma string em um array, removendo o separado.

	$data = array(); 	
 	//O fgets se auto-incrementa, cada chamada ele passa pra próxima linha do arquivo.
	while ($row = fgets($file)) {            //enquanto existir uma linha que pode ser lida, o laço vai ser executado.
	
		//o explode está criando um array, qualquer, sem nome de índices.
		$rowData = explode(",", $row);       //$rowData está recebendo linha por linha.
		$linha = array();

		for ($i=0; $i < count($headers); $i++) { 

			$linha[$headers[$i]] = $rowData[$i]; //o array $linha pega o index do array-$headers(que contém os cabeçalhos. no caso a primeira linha do arquivo .csv) e recebe os dados do array-$row(que contém os dados, à partir da segunda linha do arq.).

		}

		array_push($data, $linha);

	}

	fclose($file);

	echo json_encode($data);
  
}


 ?>