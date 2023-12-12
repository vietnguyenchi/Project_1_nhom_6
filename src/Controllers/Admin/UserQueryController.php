<?php 

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\User;

class UserQueryController extends Controller {

    // Dashboard
    public function index() {

        $this->renderAdmin("user_queries");
    }

}