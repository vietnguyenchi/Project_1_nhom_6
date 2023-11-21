<?php 
    namespace Duan1\Nhom6\Models;

    use Duan1\Nhom6\Model;

    class Room extends Model {
        protected $table = 'rooms';

        protected $columns = [
            'name',
            'area',
            'max_adult',
            'max_child',
            'price',
            'quantity',
            'status'
        ];
    }
?>