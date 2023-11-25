<?php

namespace Duan1\Nhom6;
use Duan1\Nhom6\Model;

class Controller {
    protected function render($view, $data = []) {
        $data['view'] = $view;

        extract($data);

        include "Views/client/index.php";
    }

    protected function renderAdmin($view, $data = []) {
        $data['view'] = $view;

        extract($data);
        
        include 'Views/admin/master.php';
    }
}