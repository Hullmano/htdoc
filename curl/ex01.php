<?php 

$cep = "76330000";
$link = "http://viacep.com.br/ws/$cep/json/";    //este link é de uma webservice, retorna o cep em vários formatos(Ex: json).

$ch = curl_init($link);                          //curl - faz a conexão e retorna os dados solicitados.

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);     
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);			             //recebe o retorno.

curl_close($ch);

$data = json_decode($response, true);            //transf. em array. O param. true, é para ñ retornar um Objeto.

print_r($data);
echo "<hr>";
print_r($data["localidade"]);                    //como é um array, posso especificar um chave.

 ?>