<?php 

class Pessoa{

	public $nome   = "João";         //todos podem acessar.
	protected $idade   = 39;         //somente a classe e herdeiro podem acessar.
	private $aparencia = "Feio";     //somente a classe pode acessar.

	public function mostrarDados(){

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->aparencia."<br>";

	}
}

class Pedreiro extends Pessoa{       //classe extendida. Tem todos atributos e métodos da classe "Pai".
	
	public function mostrarDados(){  //quando utilizamos a mesma função da classe "Pai", prevalece do "Herdeiro".

		echo "Classe: ".get_class($this)."<br>";

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->aparencia."<br>";
	}
}

/*$pessoa1 = new Pessoa();
//echo $pessoa1->nome;
//$pessoa1->nome = "João";
$pessoa1->mostrarDados(); */

$pessoa1 = new Pedreiro();
$pessoa1->mostrarDados();


 ?>