<?php 
    namespace Duan1\Nhom6\Controllers\Admin;

    use Duan1\Nhom6\Controller;
    use Duan1\Nhom6\Models\User;
    use Duan1\Nhom6\Models\Feature;

    class FeatureController extends Controller {
        public function index() {

            (new User)->checkRole();

            // Thêm 
            if (isset($_POST['feature_name'])) {
                $data = [
                    'name_feature' => $_POST['feature_name'],
                ];

                (new Feature())->insert($data);

                header('Location: /admin/features');
            }

            // Sửa 
            if (isset($_POST["update_feature"])) { 
                $data = [
                    'name_feature' => $_POST['name_update']
                ];
                

                $conditions = [
                    ['id', '=', $_POST['feature_id']]
                ];
                
                (new Feature())->update($data, $conditions);
                
                header('Location: /admin/features');

            }
            
            $features = (new Feature)->all();

            $this->renderAdmin('features', ['features' => $features]);
        }


        // Xóa
        public function delete() {

            $conditions = [
                ['id', '=', $_GET['id']],
            ];
    
            (new Feature())->delete($conditions);
    
            header('Location: /admin/features');
        }

    }
?>