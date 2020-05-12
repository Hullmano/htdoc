<?php 

interface Veiculo{                          //interface é um PADRÃO. Obrigatório implementar o que está aqui dentro.

	public function acelerar($velocidade);
	public function freiar($freio);
	public function marcha($marcha);
}

class Gol implements Veiculo {

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

$carro = new Gol();
$carro->acelerar("120");
$carro->freiar(100);
$carro->marcha("Segunda");
 ?>