<?php 

namespace Cliente;                                       //aqui estou indicando o nome da pasta deste arquivo.

class Cadastro extends \Cadastro {                   //aqui uso "\" para descer um pasta e encontra o arquivo Cadastro.

	private $vendas;

	public function getVendas(){
		//return $this->vendas;
		echo $this->getNome()." Vendeu $this->vendas Produtos!"; //o método "getName" foi herdada do arquivo \Cadastro.
	}

	public function setVendas($numVendas){
		$this->vendas = $numVendas;
	}
}

 ?>