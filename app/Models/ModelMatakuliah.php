<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMatakuliah extends Model
{
    protected $table            = 'matakuliah';
    protected $primaryKey       = 'kode_matkul';
    protected $allowedFields    = [
        'kode_matkul', 'nama_matkul', 'dosen_matkul'
    ];
}
