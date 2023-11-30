<?php 
    namespace Duan1\Nhom6\Controllers\Admin;

    use Duan1\Nhom6\Controller;
    use Duan1\Nhom6\Models\Room;
    use Duan1\Nhom6\Models\Facility;
    use Duan1\Nhom6\Models\Feature;

    class RoomController extends Controller {
        public function index() {
             
            $facilities = (new Facility)->all();

            $features = (new Feature)->all();

            $this->renderAdmin('rooms', ['facilities' => $facilities, 'features' => $features]);
        }
    }
?>