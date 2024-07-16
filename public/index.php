<?php
session_start();
require __DIR__ . "/../app/core/Router.php";
require __DIR__ . "/../app/core/Controller.php";
require __DIR__ . '/../app/helpers/Environment.php';
require __DIR__ . "/../app/helpers/Database.php";
require __DIR__ . "/../app/core/Model.php";
require __DIR__ . "/../app/controllers/HomeController.php";
require __DIR__ . "/../app/controllers/AuthController.php";
require __DIR__ . "/../app/controllers/MessageController.php";
require __DIR__ . "/../app/controllers/OfferController.php";
require __DIR__ . "/../app/controllers/ProjectController.php";
require __DIR__ . "/../app/controllers/JobController.php";
require __DIR__ . "/../app/controllers/UserController.php";

$router = new Router();
$router->register('/', 'HomeController', 'home');
$router->register('/home', 'HomeController', 'home');
$router->register('/dashboard', 'HomeController', 'home');
$router->register('/api/auth/signin', 'AuthController', 'signin_process');
$router->register('/api/auth/signup', 'AuthController', 'signup_process');
$router->register('/signin', 'AuthController', 'signin');
$router->register('/signup', 'AuthController', 'signup');
$router->register('/user/profile', 'UserController', 'profile');
$router->register('/message', 'MessageController', 'message');
$router->register('/offers', 'OfferController', 'offers');
$router->register('/offers/create', 'OfferController', 'create');
$router->register('/offers/preview', 'OfferController', 'offer');
$router->register('/projects/dashboard', 'ProjectController', 'projects');
$router->register('/job/post', 'JobController', 'post');
$router->register('/job', 'JobController', 'job');
$router->register('/job/apply', 'JobController', 'apply');
$router->register('/job/applications', 'JobController', 'applications');
$router->register('/job/my-jobs', 'JobController', 'posted');
$router->register('/job/application', 'JobController', 'application');
$router->register('/user/reviews', 'UserController', 'reviews');
$router->dispatch(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));


// echo (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));