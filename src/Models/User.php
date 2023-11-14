<?php

namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
    ];
}