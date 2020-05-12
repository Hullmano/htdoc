<?php  

if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
	//$cmd = $_POST["cmd"]; //quando digitar, por ex., "dir C:", no input text, vou receber via post, e vou executar na linha 10.
	
	$cmd = escapeshellcmd($_POST["cmd"]); //para evitar um ataque, via comando cmd. Melhor é não exec. comandos "system", via código dinâmico. Mas se preciso for, usar "escapeshellcmd".
	var_dump($cmd);

	echo "<pre>";

	//$command = system("dir C:", $retorno);
	$command = system($cmd, $retorno);

	echo "</pre>";
}


?>

<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>