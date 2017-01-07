<?php
//This is used to include all composer loaded dependencies
require __DIR__.'/vendor/autoload.php';


$router = new \Services\Router\Router();

$router->parse($_SERVER['REQUEST_URI']);






?>


