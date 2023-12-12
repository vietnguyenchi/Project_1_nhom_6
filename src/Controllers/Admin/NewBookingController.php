<?php
namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\ConfirmBooking;
use Duan1\Nhom6\Models\BillTransaction;

class NewBookingController extends Controller
{
    public function index()
    {
        (new User)->checkRole();

        if (isset($_SESSION['email'])) {
            $user = (new User)->checkExistAccount('email', $_SESSION['email']);
        } elseif (isset($_SESSION['phone'])) {
            $user = (new User)->checkExistAccount('phone', $_SESSION['phone']);
        }

        $bookings = (new ConfirmBooking)->newBookings();

        if(isset($_POST['submit'])) {

            $booking = (new ConfirmBooking)->findOne($_POST['id_booking']);

            $data = [
                'id_room' => $booking['id_room'],
                'id_user' => $booking['id_user'],
                'name_guest' => $booking['name_guest'],
                'phone_number' => $booking['phone_number'],
                'adult' => $booking['adult'],
                'children' => $booking['children'],
                'message' => $booking['message'],
                'check_in' => $booking['check_in'],
                'check_out' => $booking['check_out'],
                'duration_in_day' => $booking['duration_in_day'],
                'total_price' => $booking['total_price'],
                'booking_status' => 3,
                'start_date' => $booking['start_date'],
                'presence' => 1,
                'room_key' => $_POST['room_number']
            ];

            $conditions = [
                ['id', '=', $_POST['id_booking']],
            ];

            (new ConfirmBooking)->update($data, $conditions);

            $bill = (new BillTransaction)->findOne($_POST['idBill']);

            $data = [
                'id_user' => $user['id'],
                'id_momo' => $bill['id_momo'],
                'total_price' => $bill['total_price'],
                'payment_status' => 9,
                'time' => $bill['time'],
            ];

            $conditions = [
                ['id', '=', $_POST['idBill']],
            ];

            (new BillTransaction)->update($data, $conditions);

            header('Location: new_bookings');
        }

        if(isset($_POST['cancel'])) {

            $bill = (new BillTransaction)->findOne($_POST['id_cancel']);

            $data = [
                'id_user' => $bill['id_user'],
                'id_momo' => $bill['id_momo'],
                'total_price' => $bill['total_price'],
                'payment_status' => 6,
                'time' => $bill['time'],
            ];

            $conditions = [
                ['id', '=', $_POST['id_cancel']],
            ];

            (new BillTransaction)->update($data, $conditions);

            header('Location: new_bookings');

        }

        $this->renderAdmin(
            'new_bookings',
            [
                'bookings' => $bookings,
            ]);
    }

}

?>