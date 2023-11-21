<?php

use Duan1\Nhom6\Controllers\Admin\RoomController;
use Duan1\Nhom6\Controllers\Admin\UserController;
use Duan1\Nhom6\Controllers\Admin\DashboardController;
use Duan1\Nhom6\Controllers\Admin\FacilityController;
use Duan1\Nhom6\Controllers\Admin\FeatureController;
use Duan1\Nhom6\Controllers\Client\HomeController;
use Duan1\Nhom6\Router;

$router = new Router();

// Client
$router->addRoute('/', HomeController::class, 'home');
$router->addRoute('/rooms', HomeController::class, 'rooms');
$router->addRoute('/facilities', HomeController::class, 'facilities');
$router->addRoute('/about', HomeController::class, 'about');
$router->addRoute('/contact', HomeController::class, 'contact');

// Dasdboard
$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

// Users
$router->addRoute('/admin/users', UserController::class, 'index');

// Feature
$router->addRoute('/admin/features', FeatureController::class, 'index');
$router->addRoute('/admin/features', FeatureController::class, 'add');
$router->addRoute('/admin/features/delete', FeatureController::class, 'delete');

// Facilities
$router->addRoute('/admin/facilities', FacilityController::class, 'index');

// Room
$router->addRoute('/admin/rooms', RoomController::class, 'index');