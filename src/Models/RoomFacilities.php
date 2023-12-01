<?php
namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class RoomFacilities extends Model
{
    protected $table = 'room_facilities';

    protected $columns = [
        'id_room',
        'id_facilities'
    ];

    public function getAllFacilities()
    {
        $sql = "SELECT * FROM facilities JOIN room_facilities ON room_facilities.id_facilities = facilities.id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

}
?>