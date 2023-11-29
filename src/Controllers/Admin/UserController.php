<?php

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Role;
use Duan1\Nhom6\Models\AccountStatus;

class UserController extends Controller
{
    public function index() {

        $users = (new User)->allUser();
        $role = (new Role)->all();
        $account_status = (new AccountStatus)->all();
        
        $this->renderAdmin('users', ['users' => $users, 'role' => $role, 'account_status' => $account_status]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new User)->delete($conditions);

        header('Location: /admin/users');
    }
}
