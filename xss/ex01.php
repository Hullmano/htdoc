<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php 

//em um input, pode ser receber qualqer texto, deixando assim o sistema vulnerável, pois, pode ser passado parametros, como tags html ou js(Ex. abaixo). E assim executando comando nocivos ao sistema.

//$_POST['busca'] = '<a href="#"><strong>Negrito</strong></a><script>alert("JavaS")</script>';

if (isset($_POST['busca'])) 
{
	echo strip_tags($_POST['busca'], "<strong><a>");  //- este comando exclui tags, exceto que forem colacadas, como param.
	echo "<br>";
	echo htmlentities($_POST['busca']);               //- este comando, trás as tags como strings, ñ executando as mesmas.
}

 ?>