<?php 

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\BillTransaction;
use Duan1\Nhom6\Models\BillBookings;
use Duan1\Nhom6\Models\Room;

class BillAdminController extends Controller {

    public function index() {

        $bills = (new BillTransaction)->billRecord();

        $bookings = (new BillBookings)->allBillBooking();

        $rooms = (new Room)->all();
        
        $this->renderAdmin(
            "bills",
            [
                "bills" => $bills,
                "bookings" => $bookings,
                "rooms" => $rooms
            ]
        );
    }

}