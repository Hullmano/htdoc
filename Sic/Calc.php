<?php 

echo "oi <br><br>";

include ("./Calc1.php");

if ($_POST) {
	$val1 = $_POST["val1"];
	$val2 = $_POST["val2"];
	$date1 = $_POST["date1"];
	$date2 = $_POST["date2"];
	$opera = $_POST["opera"];

	$dat1 = date_create("$date1");
	$dat2 = date_create("$date2");
	$diff = date_diff($dat1,$dat2);
	echo $diff->format("%a");

	switch ($opera) {
		case 'Soma':
			echo $val1 + $val2;
		break;

		case 'Subrat':
			echo $val1 - $val2;
		break;
	}

	if ($op == "Multip") {
		echo $val1 * $val3;
	} else if ($op == "Divis") {
		echo $val1 / $val4;
	} else if ($op == "Percent") {
		echo ;
	}


}

 ?>