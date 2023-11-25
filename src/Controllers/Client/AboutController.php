<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;

class AboutController extends Controller
{
    public function about() {

        (new Model())->login();

        (new User())->register();

        $this->render('about');
    }

}
