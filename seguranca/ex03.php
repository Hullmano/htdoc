<?php 

$pasta = "arquivos";
$permissao = "0775"

if(!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Dir. Criado!"

 ?>


 <!--Permissões Pastas:
0 - Sem Permissões;
1 - Execução;
2 - Gravação;
3 - Execução e Gravação;
4 - Leitura;
5 - Leitura e Execução;
6 - Leitura e Gravação;
7 - Leitura, Gravação e Execução.

Por padrão, escrito com 3 dígitos. Ex: 0775, 0726.
Cujo(após o "0"):
	1 º díg. -> Permissões do Dono/Owner/Criador.
	2 º díg. -> Permissões de Grupos de Usuários.
	3 º díg. -> Permissões dos Outros/Visitantes.
-->
