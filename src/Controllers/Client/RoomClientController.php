<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;


class RoomClientController extends Controller
{
    public function rooms() {

        (new User())->login();
        
        (new User())->register();

        $this->render('rooms');
    }
    
}
