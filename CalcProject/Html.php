<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Projeto Calculadora</h1>
	<form method="post" action="Calc.php">

		<?php $ts = strtotime("-4 hours");?>


		Valor 1: <input type="number" name="num1" step="any">
		Data  1: <input type="date" name="dat1" value="<?php echo date("Y-m-d");?>"><br>
		Valor 2: <input type="number" name="num2" step="any">
		Data  2: <input type="date" name="dat2" value="<?php echo date("Y-m-d");?>"><br>



		<select name="op">
			<option>Soma</option>
			<option>Subtr</option>
			<option>Multi</option>
			<option>Divis</option>
			<option>Porcent</option>
			<option>Data</option>
			<option>Juros</option>
		</select>

		<input type="submit" value="Calcular">

	</form>

</body>
</html>