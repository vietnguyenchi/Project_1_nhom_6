<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;


class FacilityClientController extends Controller
{
    public function facilities() {

        (new User())->login();

        (new User())->register();
        
        $this->render('facilities');
    }

}
