<?php

namespace Duan1\Nhom6\Models;

use DateTime;
use Duan1\Nhom6\Model;

class ConfirmBooking extends Model
{
    protected $table = 'bookings';
    protected $columns = [
        'id_room',
        'id_user',
        'name_guest',
        'phone_number',
        'adult',
        'children',
        'message',
        'check_in',
        'check_out',
        'duration_in_day',
        'total_price',
        'booking_status',
        'start_date',
        'presence',
        'room_key'

    ];

    public function findBooking($id_user, $start_date)
    {
        $sql = "SELECT * FROM bookings WHERE id_user = $id_user AND start_date = '$start_date'";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }

    public function allBookings()
    {
        $sql = "SELECT *, bookings.id AS id_booking, bookings.booking_status AS status FROM bookings 
        JOIN rooms ON rooms.id = bookings.id_room
        JOIN users ON users.id = bookings.id_user
        JOIN booking_status ON booking_status.id = bookings.booking_status
        WHERE bookings.booking_status = 1
        ORDER BY bookings.id DESC
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function newBookings()
    {
        $sql = "SELECT *, bookings.total_price AS totalPrice, bookings.id AS idBooking, bill_transaction.id AS idBill FROM bookings 
        JOIN rooms ON rooms.id = bookings.id_room
        JOIN bill_bookings ON bill_bookings.id_booking = bookings.id
        JOIN bill_transaction ON bill_bookings.id_bill = bill_transaction.id
        JOIN momo ON momo.id = bill_transaction.id_momo
        WHERE bookings.booking_status = 7 AND bill_transaction.payment_status = 2";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function bookingRecords()
    {
        $sql = "SELECT *, bookings.total_price AS totalPrice, bookings.id AS idBooking FROM bookings 
        JOIN rooms ON rooms.id = bookings.id_room
        JOIN bill_bookings ON bill_bookings.id_booking = bookings.id
        JOIN bill_transaction ON bill_bookings.id_bill = bill_transaction.id
        JOIN momo ON momo.id = bill_transaction.id_momo
        WHERE bookings.booking_status != 7 AND bookings.booking_status != 1";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function checkInBookings()
    {
        $sql = "SELECT * FROM bookings WHERE bookings.booking_status = 3";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function checkAvailable($id, $check_in, $check_out)
    {
        $sql = "SELECT COUNT(*) AS SoPhongBiTrung FROM bookings
        WHERE id_room = $id 
        AND (
                ('$check_in' BETWEEN check_in AND check_out) 
                OR ('$check_out' BETWEEN  check_in AND check_out)
            )
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }

    public function countNewBookings() {
        $sql = "SELECT COUNT(*) AS newBookings FROM bookings WHERE booking_status = 7";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

}