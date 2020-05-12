<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function()
{
	echo "Home Page ".date("d-m-Y");
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();


?>

<h1>Olá</h1>

