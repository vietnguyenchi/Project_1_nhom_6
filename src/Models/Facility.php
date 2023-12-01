<?php 
    namespace Duan1\Nhom6\Models;

    use Duan1\Nhom6\Model;

    class Facility extends Model {
        protected $table = 'facilities';

        protected $columns = [
            'name_facility',
            'image',
            'description'
        ];
    };
?>