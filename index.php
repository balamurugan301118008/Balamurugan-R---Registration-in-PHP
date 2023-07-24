<?php

require 'connections.php';
require 'Core/Router.php';
session_start();
$app = [];
$app['db']= (new Database())->db;

$router = new Core\Router();

$router->get('/','Controllers/home.php')->only('auth');
$router->get('/registration','Controllers/Registration/Registration.php')->only('guest');
$router->get('/register','Controllers/Registration/register.php')->only('guest');
$router->get('/login','Controllers/Login/login.php')->only('guest');
$router->get('/login_logic','Controllers/Login/login_logics.php')->only('guest');
$router->get('/logout','Controllers/Logout/logout.php')->only('auth');
$router->get('/edit','Controllers/editprofile/edit.php')->only('auth');
$router->get('/update','Controllers/update/update.php')->only('auth');



require $router->CheckingURI();