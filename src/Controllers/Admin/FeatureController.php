<?php 
    namespace Duan1\Nhom6\Controllers\Admin;

    use Duan1\Nhom6\Controller;
    use Duan1\Nhom6\Models\feature;

    class FeatureController extends Controller {
        public function index() {
            $features = (new Feature)->all();

            $this->render('admin/feature', ['features' => $features]);
        }

        public function create() {
            if (isset($_POST['add_feature'])) {
                $data = ['name' => $_POST['feature_name']];

                (new Feature)->insert($data);

                header('Location: admin/features_facilities');
            }

            $this->render('admin/features_facilities');
        }
    }
?>