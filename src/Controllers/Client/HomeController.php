<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\Feature;
use Duan1\Nhom6\Models\Facility;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Room;
use Duan1\Nhom6\Models\ImageRoom;
use Duan1\Nhom6\Models\RoomFeatures;
use Duan1\Nhom6\Models\RoomFacilities;


class HomeController extends Controller
{
    public function home()
    {
        (new User())->login();

        (new User())->register();

        $rooms = (new Room)->roomHome();

        $room_features = (new RoomFeatures)->getAllFeatures();

        $room_facilities = (new RoomFacilities)->getAllFacilities();

        $image_room = (new ImageRoom)->all();


        $this->render(
            'home',
            [
                'rooms' => $rooms,
                'image_room' => $image_room,
                'room_features' => $room_features,
                'room_facilities' => $room_facilities,
            ]
        );
    }
}
