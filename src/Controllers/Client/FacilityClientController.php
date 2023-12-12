<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Facility;

class FacilityClientController extends Controller
{
    public function facilities() {

        (new User())->login();

        (new User())->register();

        $facilities = (new Facility)->all();
        
        $this->render(
            'facilities',
            [
                'facilities' => $facilities
            ]
        );
    }
}
