<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\BillBookings;
use Duan1\Nhom6\Models\BillTransaction;
use Duan1\Nhom6\Models\ConfirmBooking;
use Duan1\Nhom6\Models\BookingStatus;

class BookingsController extends Controller
{
    public function bookings()
    {

        $bookings = (new ConfirmBooking)->allBookings();

        $booking_status = (new BookingStatus)->all();


        $this->render(
            'bookings',
            [
                'bookings' => $bookings,
                'booking_status' => $booking_status,
            ]
        );
    }

}
