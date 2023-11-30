<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;


class RoomDetailsController extends Controller
{
    public function room_details() {

        (new User())->login();
        
        (new User())->register();

        $this->render('room_details');
    }
    
}
