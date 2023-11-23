<?php 
    namespace Duan1\Nhom6\Models;

    use Duan1\Nhom6\Model;

    // Tạo đối class feature 
    class Feature extends Model {
        // Tạo biến $table để lưu tên bảng
        protected $table = 'features';

        // Tạo array $columns đề lưu các cột trong bảng
        protected $columns = [
            'name'
        ];
    }
?>