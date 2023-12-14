<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'nim';
    protected $allowedFields    = [
        'nim', 'nama', 'alamat', 'telepon'
    ];
}
