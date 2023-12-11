<?php
namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class BillBookings extends Model
{
    protected $table = 'bill_bookings';

    protected $columns = [
        'id_booking',
        'id_bill',
    ];


    public function allBillBooking()
    {
        $sql = "SELECT * FROM bill_bookings
            JOIN bookings ON bookings.id = bill_bookings.id_booking
            ";
            
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();

    }
}
;

?>