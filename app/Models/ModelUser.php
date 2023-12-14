<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = [
        'user_id', 'username', 'password', 'plain_password', 'no_telp'
    ];
}
