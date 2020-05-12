<?php 

spl_autoload_register(function($nameClass){           //função anônima.
		var_dump($nameClass);

		$dirClass = "Classes";
		$filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";

		if (file_exists($filename)) {                  //quando if retorna "true", ñ precisa colocar comparação(=== true).
			require_once($filename);
		}
	}                    
)

 ?>