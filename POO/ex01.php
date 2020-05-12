<?php 

class Cliente {

	public $nome; //atributo.

	public function falar(){ //método.

		return "O meu nome é: $this->nome";
	}
}

$nomeCli = new Cliente();
$nomeCli->nome = "Adão";
echo $nomeCli->falar();

 ?>