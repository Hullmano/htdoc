<?php 

class Sql extends PDO {       //esta classe criada extende da classe PDO(nativa do php).

	private $conct;

	public function __construct() {
		
		$this->conct = new PDO("mysql:dbname=dbphp7;host=localhost","root","root");  //minha conexão.
	}

	public function query($vQuery, $vParams = array()){           //vou passar o prepare, e os param. Ex: bindParam.

		$stmt = $this->conct->prepare($vQuery);			       //prepare("SELECT * FROM tb_user ORDER BY login").

		foreach ($vParams as $key => $value) {                //percorre o array-$params e faz bindParam de cada um.
			$stmt->bindValue($key, $value);

		} 
			//$stmt->execute(array("1","ana"));              //executa o prepare(var. $rawQuery-que contem uma query).
			$stmt->execute();

			return $stmt;
	}

	public function select($rawQuery, $params = array()):array {

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);                  //retorna o fetchAll(resultado);
	}

}

//Apenas para testes.
/*
$teste = new Sql();
//$result = $teste->select("select * from tb_user where id = ? and login = ?");
$result = $teste->select("SELECT * FROM tb_user WHERE id = :ID AND login = :LOGIN", array(
	":ID" => '1',
	":LOGIN" => 'ana'
));
echo json_encode($result);
*/
?>