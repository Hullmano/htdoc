<?php 

$filename = "php.png";

$base64 = base64_encode(file_get_contents($filename));  //file_gets_contents - faz a leitura de todos os dados do arquivo. Aqui como o arquivo é um imagem.png, o retorno é binário. Para transf. binário em texto -> base64_encode.

$fileinfo = new finfo(FILEINFO_MIME_TYPE);      //finfo - retorna o tipo do arquivo. Assim não preciso saber se é um png, jpeg, doc, etc.

$mimetype = $fileinfo->file($filename);         //aponto qual o arquivo quero saber o tipo.

$base64Encode = "data:$mimetype;base64,".$base64;         //$mimetype - substit. o tipo "image/png" do PADRÃO base64.
//echo "data:image/png;base64," . $base64;                //este é o PADRÃO para o base64.

 ?>

 <a href="<?=$base64Encode?>" target="_blank">Link P/ Imagem!</a>  <!--aqui criamos um link(usando <?= ?> que é o comando para utilizar php no html) passando a var. $base64Encode que contem o PADRÃO de strings do base64-->
 <img src="<?=$base64Encode?>">                                    <!--aqui chamando um imagem direto no html-->