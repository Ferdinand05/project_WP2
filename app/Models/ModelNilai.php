<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    protected $table            = 'nilai';
    protected $primaryKey       = 'id_nilai';
    protected $allowedFields    = [
        'id_nilai', 'nim_mahasiswa', 'id_matkul', 'nilai_uts', 'nilai_uas', 'nilai_tugas', 'rata_rata'
    ];
}
