<?php
namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\BillTransaction;
use Duan1\Nhom6\Models\BillBookings;
use Duan1\Nhom6\Models\Room;

class RefundBookingController extends Controller {
    public function index() {

        $bills = (new BillTransaction)->refundBills();

        $bookings = (new BillBookings)->allBillBooking();

        $rooms = (new Room)->all();

        if(isset($_POST['refund'])) {
            $billRefund = (new BillTransaction)->findOne($_POST['refund_id']);

            $data = [
                'id_user' => $billRefund['id_user'],
                'id_momo' => $billRefund['id_momo'],
                'total_price' => $billRefund['total_price'],
                'payment_status' => 10,
                'time' => $billRefund['time'],
            ];

            $conditions = [
                ['id', '=', $_POST['refund_id']],
            ];

            (new BillTransaction)->update($data, $conditions);

            header('Location: refund_bookings');
        }

        $this->renderAdmin(
            'refund_bookings',
            [
                "bills" => $bills,
                "bookings" => $bookings,
                "rooms" => $rooms
            ]
        );
    }

}
?>