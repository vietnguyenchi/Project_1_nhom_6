<?php

use Duan1\Nhom6\Controllers\Admin\UserController;
use Duan1\Nhom6\Controllers\Admin\DashboardController;
use Duan1\Nhom6\Controllers\Client\HomeController;
use Duan1\Nhom6\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'home');
$router->addRoute('/rooms', HomeController::class, 'rooms');
$router->addRoute('/facilities', HomeController::class, 'facilities');
$router->addRoute('/about', HomeController::class, 'about');
$router->addRoute('/contact', HomeController::class, 'contact');

$router->addRoute('/admin/dashboard', DashboardController::class, 'index');
$router->addRoute('/admin/rooms', DashboardController::class, 'rooms');
$router->addRoute('/admin/features_facilities', DashboardController::class, 'features_facilities');
$router->addRoute('/admin/user_queries', DashboardController::class, 'features_facilities');

$router->addRoute('/admin', UserController::class, 'index');