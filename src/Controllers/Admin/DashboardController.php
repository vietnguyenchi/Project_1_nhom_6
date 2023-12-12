<?php 

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\ConfirmBooking;
use Duan1\Nhom6\Models\BillTransaction;

class DashboardController extends Controller {

    // Dashboard
    public function index() {

        $newBookings = (new ConfirmBooking)->countNewBookings();

        $this->renderAdmin(
            "dashboard",
            [
                'newBookings' => $newBookings,
            ]
        );
    }

}