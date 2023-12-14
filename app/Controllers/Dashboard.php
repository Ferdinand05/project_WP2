<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;
use App\Models\ModelMatakuliah;
use App\Models\ModelNilai;

class Dashboard extends BaseController
{
    protected $tableMahasiswa, $tableMatakuliah, $tableNilai;
    public function __construct()
    {
        $this->tableMahasiswa = new ModelMahasiswa();
        $this->tableMatakuliah = new ModelMatakuliah();
        $this->tableNilai = new ModelNilai();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'mahasiswa' => $this->tableMahasiswa->countAll(),
            'matakuliah' => $this->tableMatakuliah->countAll(),
            'nilai' =>  $this->tableNilai->countAll()
        ];


        return view('dashboard/index', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];

        return view('dashboard/contact', $data);
    }
}
