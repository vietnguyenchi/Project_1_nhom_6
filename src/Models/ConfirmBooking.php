<?php

namespace Duan1\Nhom6\Models;

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
        ORDER BY bookings.id
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}