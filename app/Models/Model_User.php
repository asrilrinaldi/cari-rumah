<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_User extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['email', 'password', 'nama', 'level'];
}
