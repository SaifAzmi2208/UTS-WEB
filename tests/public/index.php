<?php

// namespace WebLanjutan\PHP\MVC\DASAR;

//echo "Halo Web Lanjutan Dasar php mvc halaman public";

// if (isset($_SERVER['PATH_INFO'])){
//     echo $_SERVER['PATH_INFO'];
// }else {
//     echo "Tidak ada path info";
// }

// Routing sederhana dengan PATH_INFO
// $path = "/index";
// if (isset($_SERVER['PATH_INFO'])){
//          $path = $_SERVER['PATH_INFO'];
//  }

//  require __DIR__ . '/../app/view' . $path . '.php';

require_once __DIR__ . '/../vendor/autoload.php';

use WebLanjutan\PHP\MVC\DASAR\App\Router;

// Router::add('GET', '/', 'HomeController', 'index');
// Router::add('GET', '/login', 'UserController', 'login');
// Router::add('GET', '/register', 'RegisterController', 'register');

//integrasi Controller dengan Router
use WebLanjutan\PHP\MVC\DASAR\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();