<?php 

echo "<select>";

for ($i = 0; $i <= 100; $i += 2) {  //Inicia com 0, enqto for menor/igual 100, incrementa i = i + 2;
	
	if ($i >= 12 && $i <= 20) continue; //Se atender as condi. pula.

	if ($i > 80) break; //Se atender a condi. para.

	//echo "$i Oi <br>";

	echo '<option value="$i">' .$i. '</option>';
}

echo "</select>";

 ?>