<?php
session_start();
require __DIR__ . "/../app/core/Router.php";
require __DIR__ . "/../app/core/Controller.php";
require __DIR__ . '/../app/helpers/Environment.php';
require __DIR__ . "/../app/helpers/Database.php";
require __DIR__ . "/../app/core/Model.php";
require __DIR__ . "/../app/controllers/HomeController.php";
require __DIR__ . "/../app/controllers/AuthController.php";

$router = new Router();
$router->register('/', 'HomeController', 'home');
$router->register('/home', 'HomeController', 'home');
$router->register('/dashboard', 'DashboardController', 'home');
// $router->register('/signin', 'AuthController', 'job_feed');
$router->register('/api/auth/signin', 'AuthController', 'signin_process');
$router->register('/api/auth/signup', 'AuthController', 'signup_process');
$router->register('/signin', 'AuthController', 'signin');
$router->register('/signup', 'AuthController', 'signup');
$router->dispatch(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));


// echo (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));