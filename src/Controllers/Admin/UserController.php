<?php

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;
use Duan1\Nhom6\Models\Role;
use Duan1\Nhom6\Models\AccountStatus;

class UserController extends Controller
{
    public function index()
    {

        (new User)->checkRole();

        $users = (new User)->allUser();
        $roles = (new Role)->all();
        $account_status = (new AccountStatus)->all();

        if (isset($_POST['update_account'])) {
            $user = (new User)->findOne($_POST['id_update']);

            $data = [
                'name_user' => $user['name_user'],
                'password' => $user['password'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'address' => $user['address'],
                'avatar' => $user['avatar'],
                'nationality' => $user['nationality'],
                'id_role' => (int)$_POST['role_update'],
                'id_status' => (int)$_POST['status_update'],
            ];

            $conditions = [
                ['id', '=', $_POST['id_update']]
            ];

            (new User)->update($data, $conditions);

            header('Location: /admin/users');
        }

        $this->renderAdmin(
            'users',
            [
                'users' => $users,
                'roles' => $roles,
                'account_status' => $account_status
            ]
        );
    }

    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new User)->delete($conditions);

        header('Location: /admin/users');
    }
}
