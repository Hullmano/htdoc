<?php 

class Endereco{

	private $logradouro;
	private $numero;
	private $bairro;

	public function __construct($a,$b,$c){   //método construtor. é executado autom. quando a class é instanciada.

		$this->logradouro = $a;
		$this->numero     = $b;
		$this->bairro     = $c;
	}

	public function __destruct(){            //método desconstrutor. é utilizado para destruir/tirar da mémoria.
		//echo "Destruído";
	}

	public function __toString(){            //método construtor, para transf. tudo em string.
		return $this->logradouro.", ".$this->numero.", ".$this->bairro;
	}
}

$meuEndereco = new Endereco("Rua C",3,"Centro");
var_dump($meuEndereco);
echo "<hr>";
echo $meuEndereco;
 ?>