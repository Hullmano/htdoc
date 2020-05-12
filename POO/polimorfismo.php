<?php 

abstract class Animal
{

	public function comunicar()
	{
		return "Som";
	}
	public function locomover()
	{
		return "Anda";
	}
}

class Pinto extends Animal
{
	public function comunicar()
	{
		return "Pia";
	}
}

class Jacare extends Animal
{
	public function locomover()
	{
		return "Nada e " . parent::locomover();  //quando uso parent, busca na classe "Pai" o método(static) selecionado.
	}
}



$animal1 = new Pinto();
echo $animal1->comunicar();

echo "<hr>";

$animal2 = new Jacare();
echo $animal2->locomover();
 ?>