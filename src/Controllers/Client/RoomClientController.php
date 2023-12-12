<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\ConfirmBooking;
use Duan1\Nhom6\Models\Room;
use Duan1\Nhom6\Models\Facility;
use Duan1\Nhom6\Models\RoomFeatures;
use Duan1\Nhom6\Models\RoomFacilities;
use Duan1\Nhom6\Models\Feature;
use Duan1\Nhom6\Models\ImageRoom;
use Duan1\Nhom6\Models\User;


class RoomClientController extends Controller
{
    public function rooms()
    {

        (new User())->login();

        (new User())->register();

        $rooms = (new Room)->allRoom();

        $facilities = (new Facility)->all();

        $features = (new Feature)->all();

        $room_features = (new RoomFeatures)->all();

        $room_facilities = (new RoomFacilities)->all();

        $images = (new ImageRoom)->selectThumb();

        $total_room = 0;

        foreach ($rooms as $room) {

            $total_room += $room['quantity'];

        }

        
        if(isset($_POST['search'])) {
            $id_check = [];

            foreach ($rooms as $room) {

                $count = (new ConfirmBooking)->checkAvailable($room['id_rooms'], $_POST['check_in'], $_POST['check_out']);
                
                if((int)$count['SoPhongBiTrung'] < $room['quantity']) {

                    array_push($id_check, $room['id_rooms']);

                }

            }

            $roomFacilities = isset($_POST['facilities']) ? $_POST['facilities'] : [];

            $roomFeatures = isset($_POST['features']) ? $_POST['features'] : [];

            $id_room = implode(',', $id_check);

            $id_facilities = implode(',', $roomFacilities);
            $id_features = implode(',', $roomFeatures);

            if(!empty($_POST['adult'])) {
                $adult = $_POST['adult'];
            } else {
                $adult = 0;
            }
            if(!empty($_POST['children'])) {
                $children = $_POST['children'];
            } else {
                $children = 0;
            }

            $rooms = (new Room)->searchRoom($id_room, $id_facilities,$adult, $children);


        }

        if(isset($_POST['reset'])) {
            $rooms = (new Room)->allRoom();
        }

        $this->render(
            'rooms',
            [
                'rooms' => $rooms,
                'facilities' => $facilities,
                'features' => $features,
                'room_features' => $room_features,
                'room_facilities' => $room_facilities,
                'images' => $images,
            ]
        );
    }

}
