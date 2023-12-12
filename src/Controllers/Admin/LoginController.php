<?php

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Role;
use Duan1\Nhom6\Models\AccountStatus;

class LoginController extends Controller
{
    public function index() {

        
        $this->renderAuth('login');
    }

}
