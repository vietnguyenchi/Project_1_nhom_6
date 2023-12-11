<?php
namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\ConfirmBooking;

class RoomKeyController extends Controller
{
    public function index()
    {

        $bookings = (new ConfirmBooking)->checkInBookings();

        $this->renderAdmin(
            'room_keys',
            [
                'bookings' => $bookings,
            ]
        );
    }

}
?>