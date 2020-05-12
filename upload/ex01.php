<form method="post" enctype="multipart/form-data">  <!--o form normalmente retorna string, por isso setamos o enctype para que retorne outros dados, no nosso caso uma imagem-->
	<input type="file" name="fileUpload">
	<button type="submit">Enviar!</button>
</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {        //testa se o método utilizado no form foi "POST".

	$file = $_FILES["fileUpload"];                  //var $file recebe os arquivos carregados no input.

	if ($file["error"]) {                           //teste se contém erro.

		throw new Exception("Error: ".$file["error"]);
		
	} 

	$dirUploads = "uploads";                        //vamos criar um diretório para colocar o arquivo.
	if (!is_dir($dirUploads)) {

		mkdir($dirUploads);
	}

	if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])) {   //move o arq. da pasta .tmp para o dir. escolhido. Esta func. retorna BOOLEAN

		echo "Upload realizado com sucesso! Mas você ñ tem permissão sobre estes arquivos!";

	} else {

		throw new Exception("Ñ foi possível realizar o upload");
		
	}

}
 

 ?>