<?php

namespace Duan1\Nhom6;

class Controller {
    // protected function render($view, $data = []) {
    //     extract($data);

    //     include "Views/$view.php";
    // }

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