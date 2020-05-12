<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<form method="post" action="Calc.php">
		Valor 1 = <input type="number" name="val1"><br>
		Valor 2 = <input type="number" name="val2" step="any"><br>
		Data 1  = <input type="date" name="date1"><br>
		Data 2  = <input type="date" name="date2"><br>
		<!--Valor 3 = <input type="range" name="val3" min="-10" max="10">--> 
		<select name="opera">
			<option>Soma</option>
			<option>Subrat</option>
			<option>Multip</option>
			<option>Divis</option>
			<option>Percent</option>>
		</select>

		<input type="submit" name="Calc">
	</form>	
</body>
</html>