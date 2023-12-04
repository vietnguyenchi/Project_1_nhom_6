<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Room;
use Duan1\Nhom6\Models\ImageRoom;
use Duan1\Nhom6\Models\RoomFeatures;
use Duan1\Nhom6\Models\RoomFacilities;


class RoomDetailsController extends Controller
{
    public function room_details() {

        (new User())->login();
        
        (new User())->register();

        if(isset($_POST['booking'])) {

            (new Model)->checkLogin();
            
        }
        
        $room = (new Room)->findOne($_GET['id']);

        $room_features = (new RoomFeatures)->getAllFeatures();

        $room_facilities = (new RoomFacilities)->getAllFacilities();

        $image_room = (new ImageRoom)->all();


        $this->render(
            'room_details',
            [
                'room' => $room,
                'image_room' => $image_room,
                'room_features' => $room_features,
                'room_facilities' => $room_facilities,
            ]
        );
    }
    
}
