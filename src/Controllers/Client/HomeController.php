<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function home() {
        
        if(isset($_POST['register'])) {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'dob' => $_POST['dob'],
            ];

            (new User())->insert($data);

            // header('Location: /');
        }

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
