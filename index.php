<?php
session_start();
use \SearchEngine\Config\Autoloader;
use \SearchEngine\Config\Router;
require('config/config.php');
require(APP_PATH.'twig/twig-init.php');
require(ROOT_PATH.'config/Autoloader.php');
Autoloader::register();

// Routing
$branch = !empty($_GET['b']) ? $_GET['b'] : 'home';
$page   = !empty($_GET['p']) ? $_GET['p'] : 'home';

$router = new Router($branch, $page, $twig);
$router->run();