<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Contact;


class ContactController extends Controller
{
    public function contact() {

        (new User())->login();

        (new User())->register();

        if(isset($_POST['submit'])) {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'subject' => $_POST['subject'],
                'message' => $_POST['message'],
            ];

            (new Contact())->insert($data);
        }

        $this->render('contact');
    }
}
