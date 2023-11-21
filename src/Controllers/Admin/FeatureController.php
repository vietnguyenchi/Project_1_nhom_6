<?php 
    namespace Duan1\Nhom6\Controllers\Admin;

    use Duan1\Nhom6\Controller;
    use Duan1\Nhom6\Models\Category;
    use Duan1\Nhom6\Models\Feature;

    class FeatureController extends Controller {
        public function index() {
            
            $features = (new Feature)->all();

            $this->renderAdmin('features', ['features' => $features]);
        }

        public function add() {
            $features = (new Feature)->all();

            if (isset($_POST['add_feature'])) {
                $data = ['name' => $_POST['feature_name']];

                (new Feature())->insert($data);

                header('Location: /admin/features');
            }

            $this->renderAdmin('features', ['features' => $features]);
        }

        public function delete() {
            $conditions = [
                ['id', '=', $_GET['id']],
            ];
    
            (new Feature())->delete($conditions);
    
            header('Location: /admin/features');
        }
    }
?>