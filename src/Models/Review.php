<?php
namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class Review extends Model
{
    protected $table = 'review';

    protected $columns = [
        'id_user',
        'id_room',
        'rating',
        'review',
    ];

}
?>