<?php

use Duan1\Nhom6\Controllers\Admin\LoginController;
use Duan1\Nhom6\Controllers\Admin\AlertController;
use Duan1\Nhom6\Controllers\Admin\RoomController;
use Duan1\Nhom6\Controllers\Admin\UserController;
use Duan1\Nhom6\Controllers\Admin\DashboardController;
use Duan1\Nhom6\Controllers\Admin\FacilityController;
use Duan1\Nhom6\Controllers\Admin\FeatureController;
use Duan1\Nhom6\Controllers\Admin\NewBookingController;
use Duan1\Nhom6\Controllers\Admin\RefundBookingController;
use Duan1\Nhom6\Controllers\Admin\RoomKeyController;
use Duan1\Nhom6\Controllers\Admin\BillAdminController;
use Duan1\Nhom6\Controllers\Admin\AjaxBillController;
use Duan1\Nhom6\Controllers\Admin\UserQueryController;
use Duan1\Nhom6\Controllers\Client\HomeController;
use Duan1\Nhom6\Controllers\Client\RoomClientController;
use Duan1\Nhom6\Controllers\Client\FacilityClientController;
use Duan1\Nhom6\Controllers\Client\AboutController;
use Duan1\Nhom6\Controllers\Client\ConfirmBookingController;
use Duan1\Nhom6\Controllers\Client\BookingsController;
use Duan1\Nhom6\Controllers\Client\ContactController;
use Duan1\Nhom6\Controllers\Client\ProfileController;
use Duan1\Nhom6\Controllers\Client\RoomDetailsController;
use Duan1\Nhom6\Controllers\Client\BillController;
use Duan1\Nhom6\Controllers\Client\PayStatus;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Router;

$router = new Router();

// Client
// Home
$router->addRoute('/', HomeController::class, 'home');

// Rooms
$router->addRoute('/rooms', RoomClientController::class, 'rooms');

// Facilites
$router->addRoute('/facilities', FacilityClientController::class, 'facilities');

// About us
$router->addRoute('/about', AboutController::class, 'about');

// Contact
$router->addRoute('/contact', ContactController::class, 'contact');

// Profile
$router->addRoute('/profile', ProfileController::class, 'profile');
$router->addRoute('/logout', Model::class, 'logout');

// Room details
$router->addRoute('/room_details', RoomDetailsController::class, 'room_details');

// Confirm booking
$router->addRoute('/confirm_booking', ConfirmBookingController::class, 'confirm_booking');

// Bookings
$router->addRoute('/bookings', BookingsController::class, 'bookings');
$router->addRoute('/bookings/deleteBooking', BookingsController::class, 'deleteBooking');

// Bills
$router->addRoute('/bills', BillController::class, 'bills');

// Payment status
$router->addRoute('/pay_status', PayStatus::class, 'payStatus');

// Admin

// Ajax
$router->addRoute('/admin/search_bill', AjaxBillController::class, 'index');

// Login
$router->addRoute('/admin', LoginController::class, 'index');
$router->addRoute('/admin/alert', AlertController::class, 'index');

// Dashboard
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

// New Bookings
$router->addRoute('/admin/new_bookings', NewBookingController::class, 'index');

// Refund Bookings
$router->addRoute('/admin/refund_bookings', RefundBookingController::class, 'index');

// Room keys
$router->addRoute('/admin/room_keys', RoomKeyController::class, 'index');

// Bills
$router->addRoute('/admin/bills', BillAdminController::class, 'index');

// User Queries
$router->addRoute('/admin/user_queries', UserQueryController::class, 'index');
