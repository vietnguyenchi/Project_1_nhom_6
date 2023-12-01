<?php 
    namespace Duan1\Nhom6\Models;

    use Duan1\Nhom6\Model;

    class Room extends Model {
        protected $table = 'rooms';

        protected $columns = [
            'name',
            'area',
            'max_adult',
            'max_children',
            'price',
            'quantity',
            'description'
        ];


        public function allRoom() {

            $sql = "SELECT *, rooms.id AS id_rooms FROM rooms 
                JOIN room_facilities ON room_facilities.id_room = rooms.id
                JOIN room_features ON room_features.id_room = rooms.id
                JOIN facilities ON facilities.id = room_facilities.id_facilities
                JOIN features ON features.id = room_features.id_features
                GROUP BY rooms.id
                ORDER BY rooms.id DESC
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            $stmt->setFetchMode(\PDO::FETCH_ASSOC);

            return $stmt->fetchAll();

        }

        public function newRoom() {
            $sql = "SELECT MAX(id) AS max_id FROM rooms";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            $stmt->setFetchMode(\PDO::FETCH_ASSOC);

            return $stmt->fetch();
        }
    }
?>