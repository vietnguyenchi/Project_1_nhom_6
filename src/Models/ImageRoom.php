<?php
namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class ImageRoom extends Model
{
    protected $table = 'image_room';

    protected $columns = [
        'id_room',
        'image',
        'thumb'
    ];

    public function updateThumb($id, $id_room)
    {
        $sql = "UPDATE image_room
            SET thumb = 0
            WHERE id != $id AND id_room = $id_room
            ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

    }

    public function selectThumb()
    {
        $sql = "SELECT * FROM image_room WHERE thumb = 1";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}
;
?>