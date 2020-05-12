<?php 

class Documento{

	private $numero;

	public function getNumero(){
		
		return $this->numero;
	}

	public function setNumero($num){
		
		$this->numero = $num;
	}
}

class CPF extends Documento{           

	public function validarCpf():bool{  //retorna var. tipo "bool"
		
		$numCpf = $this->getNumero();   //class "filho" ñ tem acesso ao atrib. $numero. Mas tem ao método getNumero().
		echo $numCpf."<br>";
		//validar CPF;

		return 1;                       //0 = false; 1 = true; como o retorno é boolean, a função faz um cast.
	}

}

$doc = new CPF();                      //tenho acesso à todos os métodos da classe Documento.
$doc->setNumero("01533866148");
var_dump($doc->validarCpf());

 ?>