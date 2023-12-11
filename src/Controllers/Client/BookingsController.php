<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\ConfirmBooking;
use Duan1\Nhom6\Models\BookingStatus;
use Duan1\Nhom6\Models\ImageRoom;
use Duan1\Nhom6\Models\OnlinePayment;

class BookingsController extends Controller
{
    public function bookings()
    {

        $bookings = (new ConfirmBooking)->allBookings();

        $booking_status = (new BookingStatus)->all();

        $images = (new ImageRoom)->selectThumb();

        if (isset($_POST['payUrl'])) {

            $id_bookings = isset($_POST['id']) ? $_POST['id'] : [];

            $_SESSION['id_bookings'] = $id_bookings;

            $prices = isset($_POST['price']) ? $_POST['price'] : [];
            
            $totalPrice = 0;

            foreach ($prices as $price) {

                $totalPrice += (int) $price;

            }

            (new OnlinePayment)->OnlinePayment($totalPrice);

        }

        $this->render(
            'bookings',
            [
                'images' => $images,
                'bookings' => $bookings,
                'booking_status' => $booking_status,
            ]
        );
    }

    public function deleteBooking()
    {

        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new ConfirmBooking)->delete($conditions);


        header('Location: /bookings');
    }
}
