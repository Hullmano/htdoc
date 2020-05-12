<?php 

require_once("config.php");

echo session_id();

echo '<br>';

var_dump(session_save_path());

echo '<br>';

var_dump(session_status());
 ?>