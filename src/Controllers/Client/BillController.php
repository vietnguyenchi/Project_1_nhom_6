<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\BillTransaction;
use Duan1\Nhom6\Models\ConfirmBooking;
use Duan1\Nhom6\Models\Room;

class BillController extends Controller
{
    public function Bills()
    {

        $bills = (new BillTransaction)->allBill();

        $bookings = (new ConfirmBooking)->all();

        $rooms = (new Room)->all();



        $this->render(
            'bills',
            [
                'bills' => $bills,
                'bookings' => $bookings,
                'rooms' => $rooms,
            ],
        );
    }

}
