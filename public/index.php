<?php

//start of the application, call router.php
//When calling a page : get trough index.php which lead the information to the router

use App\Autoloader;
use App\libs\Router;

define('ROOT', dirname(__DIR__));

require_once ROOT.'/Autoloader.php';
Autoloader::register();

$app = new Router();
$app->start();