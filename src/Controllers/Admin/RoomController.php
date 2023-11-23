<?php 
    namespace Duan1\Nhom6\Controllers\Admin;

    use Duan1\Nhom6\Controller;
    use Duan1\Nhom6\Models\Room;

    class RoomController extends Controller {
        public function index() {
             
            $rooms = (new Room)->all();

            $this->renderAdmin('rooms', ['rooms' => $rooms]);
        }
    }
?>