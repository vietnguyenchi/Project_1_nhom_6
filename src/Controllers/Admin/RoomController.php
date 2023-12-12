<?php
namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\Room;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Facility;
use Duan1\Nhom6\Models\Feature;
use Duan1\Nhom6\Models\RoomFacilities;
use Duan1\Nhom6\Models\RoomFeatures;
use Duan1\Nhom6\Models\ImageRoom;

class RoomController extends Controller
{
    public function index()
    {

        (new User)->checkRole();

        $facilities = (new Facility)->all();

        $features = (new Feature)->all();

        // Add room

        if (isset($_POST['submit'])) {

            $data = [
                'name' => $_POST['name'],
                'area' => $_POST['area'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'max_adult' => $_POST['adult'],
                'max_children' => $_POST['children'],
                'description' => $_POST['description']
            ];

            (new Room)->insert($data);

            $id_room = (new Room)->newRoom();

            $roomFacilities = isset($_POST['facilities']) ? $_POST['facilities'] : [];

            $roomFeatures = isset($_POST['features']) ? $_POST['features'] : [];

            foreach ($roomFacilities as $facility) {

                $data = [
                    'id_room' => (int) $id_room['max_id'],
                    'id_facilities' => (int) $facility,
                ];

                (new RoomFacilities)->insert($data);
            }

            foreach ($roomFeatures as $feature) {

                $data = [
                    'id_room' => (int) $id_room['max_id'],
                    'id_features' => (int) $feature,
                ];

                (new RoomFeatures)->insert($data);

            }

            header('Location: /admin/rooms');

        }


        // Update rooms
        if (isset($_POST['update'])) {

            $data = [
                'name' => $_POST['name_update'],
                'area' => $_POST['area_update'],
                'price' => $_POST['price_update'],
                'quantity' => $_POST['quantity_update'],
                'max_adult' => $_POST['adult_update'],
                'max_children' => $_POST['children_update'],
                'description' => $_POST['description_update']
            ];

            $conditions = [
                ['id', '=', $_POST['id_room_update']],
            ];

            (new Room)->update($data, $conditions);


            $conditions = [
                ['id_room', '=', $_POST['id_room_update']],
            ];

            (new RoomFacilities)->delete($conditions);
            (new RoomFeatures)->delete($conditions);

            $roomFacilities = isset($_POST['facilities_update']) ? $_POST['facilities_update'] : [];

            $roomFeatures = isset($_POST['features_update']) ? $_POST['features_update'] : [];

            foreach ($roomFacilities as $facility) {

                $data = [
                    'id_room' => (int) $_POST['id_room_update'],
                    'id_facilities' => (int) $facility,
                ];

                (new RoomFacilities)->insert($data);
            }

            foreach ($roomFeatures as $feature) {

                $data = [
                    'id_room' => (int) $_POST['id_room_update'],
                    'id_features' => (int) $feature,
                ];

                (new RoomFeatures)->insert($data);

            }

            header('Location: /admin/rooms');

        }

        // Add Image
        if (isset($_POST['add_image'])) {
            $data = [
                'id_room' => $_POST['id_room_image'],
                'thumb' => 0
            ];

            $data['image'] = null;
            $img = $_FILES['image_room'] ?? null;
            if ($img) {
                $pathSaveDB = '/uploads/' . $img['name'];

                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
                    $data['image'] = $pathSaveDB;
                }
            }

            (new ImageRoom)->insert($data);

            header('Location: /admin/rooms');
        }

        // Set thumb
        if (isset($_POST['save'])) {
            if (isset($_POST['thumb'])) {

                $image = (new ImageRoom)->findOne($_POST['thumb']);

                $data = [
                    'id_room' => $image['id_room'],
                    'image' => $image['image'],
                    'thumb' => 1
                ];

                $conditions = [
                    ['id', '=', $_POST['thumb']],
                ];

                (new ImageRoom)->update($data, $conditions);
                (new ImageRoom)->updateThumb($_POST['thumb'], $image['id_room']);

                header('Location: /admin/rooms');

            }
        }


        $rooms = (new Room)->allRoom();

        $room_facilities = (new RoomFacilities)->getAllFacilities();

        $room_features = (new RoomFeatures)->getAllFeatures();

        $image_room = (new ImageRoom)->all();

        $this->renderAdmin(
            'rooms',
            [
                'rooms' => $rooms,
                'facilities' => $facilities,
                'features' => $features,
                'room_facilities' => $room_facilities,
                'room_features' => $room_features,
                'image_room' => $image_room,
            ]
        );
    }

    // Delete room
    public function deleteRoom() {

        $conditions = [
            ['id_room', '=', $_GET['id']],
        ];

        (new RoomFacilities)->delete($conditions);
        (new RoomFeatures)->delete($conditions);
        (new ImageRoom)->delete($conditions);

        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Room())->delete($conditions);

        header('Location: /admin/rooms');
    }

    // Delete image
    public function deleteImage() {

        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new ImageRoom)->delete($conditions);

        header('Location: /admin/rooms');
    }
}
?>