<?php
namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\ConfirmBooking;

class RoomKeyController extends Controller
{
    public function index()
    {

        (new User)->checkRole();

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