<?php

use Duan1\Nhom6\Controllers\Admin\RoomController;
use Duan1\Nhom6\Controllers\Admin\UserController;
use Duan1\Nhom6\Controllers\Admin\DashboardController;
use Duan1\Nhom6\Controllers\Admin\FacilityController;
use Duan1\Nhom6\Controllers\Admin\FeatureController;
use Duan1\Nhom6\Controllers\Client\HomeController;
use Duan1\Nhom6\Controllers\Client\RoomClientController;
use Duan1\Nhom6\Controllers\Client\FacilityClientController;
use Duan1\Nhom6\Controllers\Client\AboutController;
use Duan1\Nhom6\Controllers\Client\ContactController;
use Duan1\Nhom6\Controllers\Client\ProfileController;
use Duan1\Nhom6\Controllers\Client\RoomDetailsController;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Router;

$router = new Router();

// Client
$router->addRoute('/', HomeController::class, 'home');
$router->addRoute('/rooms', RoomClientController::class, 'rooms');
$router->addRoute('/facilities', FacilityClientController::class, 'facilities');
$router->addRoute('/about', AboutController::class, 'about');
$router->addRoute('/contact', ContactController::class, 'contact');
$router->addRoute('/profile', ProfileController::class, 'profile');
$router->addRoute('/room_details', RoomDetailsController::class, 'room_details');
$router->addRoute('/logout', Model::class, 'logout');

// Dasdboard
$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

// Users
$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

// Feature
$router->addRoute('/admin/features', FeatureController::class, 'index'); 
$router->addRoute('/admin/features/delete', FeatureController::class, 'delete');

// Facilities
$router->addRoute('/admin/facilities', FacilityController::class, 'index');
$router->addRoute('/admin/facilities/delete', FacilityController::class, 'delete');

// Room
$router->addRoute('/admin/rooms', RoomController::class, 'index');
$router->addRoute('/admin/rooms/delete', RoomController::class, 'deleteRoom');
$router->addRoute('/admin/rooms/delete_image', RoomController::class, 'deleteImage');