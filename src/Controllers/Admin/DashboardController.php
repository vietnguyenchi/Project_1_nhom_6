<?php 

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;

class DashboardController extends Controller {

    // Dashboard
    public function index() {

        $this->renderAdmin("dashboard");
    }

    // Rooms
    public function rooms() {

        $this->renderAdmin("rooms");
    }

    // Features & Facilities
    public function features_facilities() {

        $this->renderAdmin("features_facilities");
    }

    // Users
    public function user_queries() {

        $this->renderAdmin("user_queries");
    }

}