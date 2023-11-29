<?php
namespace Duan1\Nhom6\Controllers\Admin;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Models\Facility;

class FacilityController extends Controller {
    public function index() {

        // Thêm
        if (isset($_POST['add_facility'])) {
            $data = [
                'name' => $_POST['facility_name'],
                'description' => $_POST['description'],
            ];

            $data['image'] = null;
            $img = $_FILES['facility_image'] ?? null;
            if($img) {
                $pathSaveDB = '/uploads/' . $img['name'];

                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if(move_uploaded_file($img['tmp_name'], $pathUpload)) {
                    $data['image'] = $pathSaveDB;
                }
            }

            (new Facility())->insert($data);
    
            header('Location: /admin/facilities');
        }

        // sửa
        if (isset($_POST['update_facility'])) {
            $data = [
                'name' => $_POST['name_update'],
                'description' => $_POST['desc_update'],
            ];

            $data['image'] = $_POST['img_current'];
            $img = $_FILES['image_update'] ?? null;
            $flag = false;
            if($img) {
                $pathSaveDB = '/uploads/' . $img['name'];

                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if(move_uploaded_file($img['tmp_name'], $pathUpload)) {
                    $data['image'] = $pathSaveDB;
                    $flag = true;
                }
            }

            $conditions = [
                ['id', '=', $_POST['facility_id']],
            ];

            (new Facility())->update($data, $conditions);

            if ($flag) {
                $pathFile = __DIR__ .'/../../..'. $_POST['img_current'];
                unlink($pathFile);
            }
    
            header('Location: /admin/facilities');
        }
        
        $facilities = (new Facility)->all();

        $this->renderAdmin('facilities', ['facilities' => $facilities]);
    }

    public function delete() {
        $condition = [
            ['id', '=', $_GET['id']],
        ];

        (new Facility())->delete($condition);

        $pathFile = __DIR__ . '/../../..' . $_POST['image'];
        unlink($pathFile);

        header('Location: /admin/facilities');
    }
}

?>