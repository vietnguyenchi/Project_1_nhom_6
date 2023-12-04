<?php 
    namespace Duan1\Nhom6\Models;

    use Duan1\Nhom6\Model;

    class BillBookings extends Model {
        protected $table = 'bill_bookings';

        protected $columns = [
            'id_booking',
            'id_bill',
        ];
    };
?>