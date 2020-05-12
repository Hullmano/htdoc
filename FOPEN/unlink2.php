<?php 

if (!is_dir("images")) {
	mkdir("images");
}

$aImages = scandir("images");

foreach ($aImages as $item) {
	if (!in_array($item, array(".", ".."))) {
		
		unlink("images/".$item);
	}
}

 ?>