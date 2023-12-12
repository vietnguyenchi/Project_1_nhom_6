<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Review;
use Duan1\Nhom6\Models\BillTransaction;
use Duan1\Nhom6\Models\ConfirmBooking;
use Duan1\Nhom6\Models\BillBookings;
use Duan1\Nhom6\Models\Room;

class BillController extends Controller
{
    public function Bills()
    {
        if (isset($_SESSION['email'])) {
            $user = (new User)->checkExistAccount('email', $_SESSION['email']);
        } elseif (isset($_SESSION['phone'])) {
            $user = (new User)->checkExistAccount('phone', $_SESSION['phone']);
        }

        $bills = (new BillTransaction)->allBill();

        $bookings = (new BillBookings)->allBillBooking();

        $rooms = (new Room)->all();

        if(isset($_POST['cancel'])) {
            $bill = (new BillTransaction)->findOne($_POST['id_cancel']);

            $data = [
                'id_user' => $user['id'],
                'id_momo' => $bill['id_momo'],
                'total_price' => $bill['total_price'],
                'payment_status' => 7,
                'time' => $bill['time'],
            ];

            $conditions = [
                ['id', '=', $_POST['id_cancel']],
            ];

            (new BillTransaction)->update($data, $conditions);

            header('Location: /bills');
        }

        if(isset($_POST['rate'])) {

            $rooms = isset($_POST['id_room']) ? $_POST['id_room'] : [];

            foreach ($rooms as $room) {

                $data = [
                    'id_user' => $_POST['id_user'],
                    'id_room' => (int)$room,
                    'rating' => $_POST['rating'],
                    'review' => $_POST['review']
                ];

                (new Review)->insert($data);

            }

            header("Location: bills");
        }


        $this->render(
            'bills',
            [
                'bills' => $bills,
                'bookings' => $bookings,
                'rooms' => $rooms,
                'user' => $user
            ],
        );
    }

}
