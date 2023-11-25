<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;


class ContactController extends Controller
{
    public function contact() {

        (new Model())->login();

        (new User())->register();

        $this->render('contact');
    }
}
