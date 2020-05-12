<?php 

$link = "https://www.google.com/logos/doodles/2020/stay-and-play-at-home-with-popular-past-google-doodles-coding-2017-6753651837108765-law.gif";

$content = file_get_contents($link);    // - recebe o conteúdo(binário) do arquivo.

$parse = parse_url($link);              // - transf. o binário em objeto.

$basename = basename($parse["path"]);   // - retorna o nomebase na chave/campo path.

$file = fopen($basename, "w+");         // - pode ser trocado o nome do arquivo.($basename).

fwrite($file, $content);

fclose($file);

$php = basename("php.png");             //consigo buscar um arquivo, pelo nome, na pasta.

 ?>

 <img src="<?=$basename?>">
 <img src="<?=$php?>">