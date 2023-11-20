<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function home() {
        $this->render('home');
    }
    public function rooms() {
        $this->render('rooms');
    }
    public function facilities() {
        $this->render('facilities');
    }
    public function contact() {
        $this->render('contact');
    }
    public function about() {
        $this->render('about');
    }
}
