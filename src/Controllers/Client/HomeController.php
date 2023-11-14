<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $this->render('client/home');
    }
}
