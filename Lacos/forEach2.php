<form>
	<input type="text" name="nome">
	<input type="number" name="idade">
	<input type="submit" value="Ok">

</form>

<?php 
if (isset($_GET)){   //testa se está vazio o array.

	foreach ($_GET as $nomeCampos => $value) {  //percorre cada índice do array($_GET - Array Global que armazena var.) e trás o índice e o valor em cada índice.
		echo "O nome do campo é: ".$nomeCampos."<br>";
		echo "O valor do campo é: ".$value;
		echo "<hr>";   //desenha um linha.
	}

}

 ?>