<?php 

class Pessoa {

	private $nome;
	private $genero;
	private $idade;

	public function getNome(){

		return $this->nome;

	}

	public function setNome($name){

		$this->nome = $name;

	}

	public function getGenero(){

		return $this->genero;

	}

	public function setGenero($genre){

		$this->genero = $genre;

	}

	public function getIdade():int{ //posso fazer um cast, de string para int.

		return $this->idade;

	}

	public function setIdade($yearOld){

		$this->idade = $yearOld;

	}

	public function exibir(){

		return array(
			"Nome"=>$this->getNome(),
			"Gênero"=>$this->getGenero(),
			"Idade"=>$this->getIdade()
		);

	}

}

$pessoa1 = new Pessoa();

$pessoa1->setNome("Antonio");
//echo $pessoa1->getNome();
$pessoa1->setGenero("Masculino");
//echo $pessoa1->getGenero();
$pessoa1->setIdade("30");
//echo $pessoa1->getIdade();

//print_r($pessoa1->exibir());
echo json_encode($pessoa1->exibir());
 ?>