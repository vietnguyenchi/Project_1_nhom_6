<?php

namespace Duan1\Nhom6\Controllers\Client;

use DateTime;
use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\ConfirmBooking;
use Duan1\Nhom6\Models\Room;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\ImageRoom;
use Duan1\Nhom6\Models\RoomFeatures;
use Duan1\Nhom6\Models\RoomFacilities;
use Duan1\Nhom6\Models\OnlinePayment;


class ConfirmBookingController extends Controller
{
    public function confirm_booking()
    {

        $room = (new Room)->findOne($_GET['id']);

        $room_features = (new RoomFeatures)->getAllFeatures();

        $room_facilities = (new RoomFacilities)->getAllFacilities();

        $image_room = (new ImageRoom)->all();

        if (!empty($_SESSION['email'])) {

            $user = (new User)->checkExistAccount('email', $_SESSION['email']);

        } else {

            $user = (new User)->checkExistAccount('phone', $_SESSION['phone']);

        }

        if (isset($_POST['save'])) {

            $dayCheckIn_str = $_POST['check-in'];
            $dayCheckOut_str = $_POST['check-out'];

            $dayCheckIn = new DateTime($dayCheckIn_str);
            $dayCheckOut = new DateTime($dayCheckOut_str);

            $durationInDay = $dayCheckIn->diff($dayCheckOut)->days;

            $totalPrice = ((int) $room['price']) * ((int) $durationInDay);

            $date = date('y-m-d h-i-s');

            $data = [
                'id_room' => $room['id'],
                'id_user' => $user['id'],
                'name_guest' => $_POST['name'],
                'phone_number' => $_POST['phone'],
                'adult' => $_POST['adult'],
                'children' => $_POST['children'],
                'message' => $_POST['message'],
                'check_in' => $_POST['check-in'],
                'check_out' => $_POST['check-out'],
                'duration_in_day' => $durationInDay,
                'total_price' => $totalPrice,
                'booking_status' => 1,
                'start_date' => $date
            ];

            (new ConfirmBooking)->insert($data);

            header('Location: confirm_booking?id=' . $room['id'] . '');

            (new Model)->alert('success', 'Saved');
        }

        if (isset($_POST['payUrl'])) {
            $dayCheckIn_str = $_POST['check-in'];
            $dayCheckOut_str = $_POST['check-out'];

            $dayCheckIn = new DateTime($dayCheckIn_str);
            $dayCheckOut = new DateTime($dayCheckOut_str);

            $durationInDay = $dayCheckIn->diff($dayCheckOut)->days;

            $totalPrice = ((int) $room['price']) * ((int) $durationInDay);

            $date = date('y-m-d h-i-s');

            $data = [
                'id_room' => $room['id'],
                'id_user' => $user['id'],
                'name_guest' => $_POST['name'],
                'phone_number' => $_POST['phone'],
                'adult' => $_POST['adult'],
                'children' => $_POST['children'],
                'message' => $_POST['message'],
                'check_in' => $_POST['check-in'],
                'check_out' => $_POST['check-out'],
                'duration_in_day' => $durationInDay,
                'total_price' => $totalPrice,
                'booking_status' => 1,
                'start_date' => $date
            ];

            (new ConfirmBooking)->insert($data);

            $booking = (new ConfirmBooking)->findBooking($user['id'], $date);

            $id_bookings = [];

            array_push($id_bookings, $booking['id']);

            $_SESSION['id_bookings'] = $id_bookings;

            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


            $partnerCode = 'MOMOBKUN20180529';
            $accessKey = 'klm05TvNBzhg7h7j';
            $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
            $orderInfo = "Thanh toán qua MoMo";
            $amount = $totalPrice;
            $orderId = time() . "";
            $redirectUrl = "http://nhom-6.test/pay_status";
            $ipnUrl = "http://nhom-6.test/pay_status";
            $extraData = "";


            // $partnerCode = $partnerCode;
            // $accessKey = $accessKey;
            $serectkey = $secretKey;
            // $orderId = $orderId; // Mã đơn hàng
            // $orderInfo = $orderInfo;
            // $amount = $amount;
            // $ipnUrl = $ipnUrl;
            // $redirectUrl = $redirectUrl;
            // $extraData = $extraData;

            $requestId = time() . "";
            $requestType = "payWithATM";
            $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $serectkey);
            $data = array(
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );
            $result = (new OnlinePayment)->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json

            //Just a example, please check more in there

            header('Location: ' . $jsonResult['payUrl']);
        }


        $this->render(
            'confirm_booking',
            [
                'room' => $room,
                'user' => $user,
                'image_room' => $image_room,
                'room_features' => $room_features,
                'room_facilities' => $room_facilities,
            ]
        );
    }

}
