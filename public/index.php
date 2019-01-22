<?php

 require "../config/autoload.php";


use Core\Router;


/*
 * Twig (laravel template)
 */
require_once  '../vendor/autoload.php';
require  '../config/defines.php';
require  '../config/functions.php';
/*
 *
 */
?>



<?
/**
 *  Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


session_start();


$router = new Router();

// rule routes
$router -> add('',['controller' => 'Home', 'action' => 'show']);
$router -> add('task-add',['controller' => 'Tasks', 'action' => 'add']);
$router -> add('task-update',['controller' => 'Tasks', 'action' => 'update']);
$router -> add('login',['controller' => 'Login', 'action' => 'login']);
$router -> add('logout',['controller' => 'Login', 'action' => 'logout']);
$router -> add('task-edit',['controller' => 'Ajax', 'action' => 'edit']);
$router -> add('task-status-update',['controller' => 'Ajax', 'action' => 'updateStatus']);

$router -> add('register',['controller' => 'Register', 'action' => 'register']);


$router -> add('{controller}/{action}');

$router -> add('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router -> add('{controller}/{id:\d+}/{action}');


$router -> dispatch( $_SERVER['QUERY_STRING']);

//if ($router->match($url))
//    debug($router->getRoutes());
//else echo "No router is found " . $url;
?>
