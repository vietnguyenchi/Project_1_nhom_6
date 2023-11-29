<?php

namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class Contact extends Model {
    protected $table = 'contact';
    protected $columns = [
        'name',
        'email',
        'subject',
        'message'
    ];
}