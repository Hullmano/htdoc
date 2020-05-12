<?php 

include ("./Html.php");

//$ts = strtotime("-3 hours");
//echo date("d-m-Y",$ts);

if ($_POST) {
	$val1 = $_POST["num1"];
	$val2 = $_POST["num2"];
	//$dat1 = $_POST["dat1"];
	//$dat2 = $_POST["dat2"];
	$data1 = date_create($_POST["dat1"]);
	$data2 = date_create($_POST["dat2"]);
	$oper = $_POST["op"];

	switch ($oper) {
		case "Soma":
			$tot = $val1 + $val2;
			echo $tot;
		break;

		case "Subtr":
			$tot = $val1 - $val2;
			echo $tot;
		break;

		case "Multi":
			$tot = $val1 * $val2;
			echo $tot;
		break;		

		case "Divis":
			$tot = $val1 / $val2;
			echo $tot;
		break;		

		case 'Porcent':
			$tot = ($val2 / 100	) * $val1;
			echo $tot;
		break;

		case 'Data':
			$diff = date_diff($data1,$data2);
			echo $diff->format("%a");
		break;  

		case 'Juros':
			$diff = date_diff($data1,$data2);
			$difDt = $diff->format("%a");
			echo "O Total de Dias é: $difDt";
			echo "<br>";
			$tot  = ($val2 / 100	) * $val1;
			echo "O Valor do Juros para 30 Dias é: $tot";
			echo "<br>";
			$totJ = ($tot / 30) * $difDt;
			echo "O Valor do Juros Calculados é: $totJ";
		break; 		
		
		default:
			echo "Nunhma das Op.";
		break;
	}
}


 ?>