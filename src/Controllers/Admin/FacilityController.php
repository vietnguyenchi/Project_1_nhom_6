<?php 
    namespace Duan1\Nhom6\Controllers\Admin;

    use Duan1\Nhom6\Controller;
    use Duan1\Nhom6\Models\Facility;

    class FacilityController extends Controller {
        public function index() {

            $facilities = (new Facility)->all();

            $this->renderAdmin('facilities', ['facilities' => $facilities]);
        }
    }

?>