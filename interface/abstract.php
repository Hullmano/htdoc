<?php 

interface Veiculo{                          //interface é um PADRÃO. Obrigatório implementar o que está aqui dentro.

	public function acelerar($velocidade);
	public function freiar($freio);
	public function marcha($marcha);
}

abstract class Carro implements Veiculo {     //uma classe abstrata não pode ser instanciada, tenho que criar um classe que se extende dela, para assim acessar os atrib. e métodos.

	public function acelerar($veloc){

		echo "A velocidade atual é: ".$veloc." km/h <br>";

	}

	public function freiar($freio){

		echo "Freiou a $freio km/h <br>";

	}

	public function marcha($troca){

		echo "Engatou a $troca marcha";

	}
}

class Combi extends Carro{

	public function encher(){
		return $this->marcha("1ª");
	}

}

/*$carro = new Gol();
$carro->acelerar("120");
$carro->freiar(100);
$carro->marcha("Segunda"); */

$carro = new Combi();
$carro->encher();
 ?>