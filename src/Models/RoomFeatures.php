<?php
namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class RoomFeatures extends Model
{
    protected $table = 'room_features';

    protected $columns = [
        'id_room',
        'id_features'
    ];

    public function getAllFeatures()
    {
        $sql = "SELECT * FROM features JOIN room_features ON room_features.id_features = features.id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

}
?>