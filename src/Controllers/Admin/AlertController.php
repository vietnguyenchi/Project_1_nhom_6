<?php

namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
class AlertController extends Controller
{
    public function index() {

        $this->renderAdmin('alert');
    }

}
