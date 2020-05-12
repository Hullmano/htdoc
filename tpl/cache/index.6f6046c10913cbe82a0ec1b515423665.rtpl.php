<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hi <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Testando um Template!</p>
<p>Current Version PHP : <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>