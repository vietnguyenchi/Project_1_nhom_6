<?php

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\BillTransaction;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\BillBookings;
use Duan1\Nhom6\Models\Room;

class AjaxBillController extends Controller
{
    public function index()
    {
        (new User)->checkRole();

        $bills = (new BillTransaction)->billRecord();

        if (isset($_POST['search_bill'])) {

            $bills = (new BillTransaction)->search_bill($_POST['search_bill']);

        }

        $bookings = (new BillBookings)->allBillBooking();

        $rooms = (new Room)->all();

        $this->renderAuth(
            "search_bill",
            [
                "bills" => $bills,
                "bookings" => $bookings,
                "rooms" => $rooms
            ]
        );
    }
}
