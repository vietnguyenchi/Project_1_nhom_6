<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\MomoWallet;
use Duan1\Nhom6\Models\BillTransaction;
use Duan1\Nhom6\Models\BillBookings;
use Duan1\Nhom6\Models\ConfirmBooking;

class PayStatus extends Controller
{
    public function payStatus()
    {
        if (isset($_SESSION['email'])) {
            $user = (new User)->checkExistAccount('email', $_SESSION['email']);
        } elseif (isset($_SESSION['phone'])) {
            $user = (new User)->checkExistAccount('phone', $_SESSION['phone']);
        }

        if (isset($_GET['partnerCode']) && ($_GET['message'] == 'Successful.')) {
            $data = [
                'partnerCode' => $_GET['partnerCode'],
                'orderId' => $_GET['orderId'],
                'requestId' => $_GET['requestId'],
                'amount' => $_GET['amount'],
                'orderInfo' => $_GET['orderInfo'],
                'orderType' => $_GET['orderType'],
                'transId' => $_GET['transId'],
                'payType' => $_GET['payType'],
                'signature' => $_GET['signature'],
            ];

            (new MomoWallet)->insert($data);

            $billMomo = (new MomoWallet)->findBill($_GET['orderId']);

            $time = date('Y-m-d H-i-s');

            $data = [
                'id_user' => $user['id'],
                'id_momo' => $billMomo['id'],
                'total_price' => $_GET['amount'],
                'payment_status' => 2,
                'time' => $time,
            ];

            (new BillTransaction)->insert($data);

            $billDetail = (new BillTransaction)->findBillDetail($billMomo['id']);

            $id_bookings = $_SESSION['id_bookings'];

            foreach ($id_bookings as $id_booking) {
                $data = [
                    'id_booking' => $id_booking,
                    'id_bill' => $billDetail['id'],
                ];

                (new BillBookings)->insert($data);
            }

            foreach ($id_bookings as $id_booking) {

                $booking = (new ConfirmBooking)->findOne($id_booking);

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
                    'booking_status' => 7,
                    'start_date' => $booking['start_date'],
                    'presence' => 0,
                    'room_key' => null
                ];

                $conditions = [
                    ['id', '=', $id_booking],
                ];

                (new ConfirmBooking)->update($data, $conditions);
            }

            unset($_SESSION['id_bookings']);

        } else {
            $data = [
                'partnerCode' => $_GET['partnerCode'],
                'orderId' => $_GET['orderId'],
                'requestId' => $_GET['requestId'],
                'amount' => $_GET['amount'],
                'orderInfo' => $_GET['orderInfo'],
                'orderType' => $_GET['orderType'],
                'transId' => $_GET['transId'],
                'payType' => $_GET['payType'],
                'signature' => $_GET['signature'],
            ];

            (new MomoWallet)->insert($data);

            $billMomo = (new MomoWallet)->findBill($_GET['orderId']);

            $time = date('Y-m-d H-i-s');

            $data = [
                'id_user' => $user['id'],
                'id_momo' => $billMomo['id'],
                'total_price' => $_GET['amount'],
                'payment_status' => 4,
                'time' => $time,
            ];

            (new BillTransaction)->insert($data);

            $billDetail = (new BillTransaction)->findBillDetail($billMomo['id']);

            $id_bookings = $_SESSION['id_bookings'];

            foreach ($id_bookings as $id_booking) {
                $data = [
                    'id_booking' => $id_booking,
                    'id_bill' => $billDetail['id'],
                ];

                (new BillBookings)->insert($data);
            }

            foreach ($id_bookings as $id_booking) {

                $booking = (new ConfirmBooking)->findOne($id_booking);

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
                    'booking_status' => 7,
                    'start_date' => $booking['start_date'],
                    'presence' => 0,
                    'room_key' => null
                ];

                $conditions = [
                    ['id', '=', $id_booking],
                ];

                (new ConfirmBooking)->update($data, $conditions);
            }

            unset($_SESSION['id_bookings']);
        }

        $this->render('pay_status');
    }

}
