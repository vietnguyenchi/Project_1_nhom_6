<?php
namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class BillTransaction extends Model
{
    protected $table = 'bill_transaction';

    protected $columns = [
        'id_user',
        'id_momo',
        'total_price',
        'payment_status',
        'time'
    ];

    public function findBillDetail($id_momo)
    {
        $sql = "SELECT * FROM bill_transaction WHERE id_momo = '$id_momo'";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }

    public function allBill()
    {
        $sql = "SELECT *, bill_transaction.total_price AS totalPrice, bill_transaction.id AS id_bill FROM bill_transaction
            JOIN momo ON momo.id = bill_transaction.id_momo
            -- JOIN bill_bookings ON bill_bookings.id_bill = bill_transaction.id
            -- JOIN bookings ON bookings.id = bill_bookings.id_booking
            GROUP BY bill_transaction.id
            ORDER BY bill_transaction.id DESC
            ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function billRecord()
    {
        $sql = "SELECT *, bill_transaction.total_price AS price_total, bill_transaction.id AS id_bill FROM bill_transaction
        JOIN users ON users.id = bill_transaction.id_user
        JOIN momo ON momo.id = bill_transaction.id_momo
        -- JOIN bill_bookings ON bill_bookings.id_bill = bill_transaction.id
        WHERE payment_status != 2 AND payment_status != 7
        GROUP BY bill_transaction.id
        ORDER BY bill_transaction.id DESC
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function refundBills()
    {
        $sql = "SELECT *, bill_transaction.total_price AS price_total, bill_transaction.id AS id_bill FROM bill_transaction
        JOIN users ON users.id = bill_transaction.id_user
        JOIN momo ON momo.id = bill_transaction.id_momo
        -- JOIN bill_bookings ON bill_bookings.id_bill = bill_transaction.id
        WHERE payment_status = 7
        GROUP BY bill_transaction.id
        ORDER BY bill_transaction.id DESC
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

}
?>