<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;
use App\Models\ModelMatakuliah;
use App\Models\ModelNilai;

class Nilai extends BaseController
{
    protected $tableNilai;
    public function __construct()
    {
        $this->tableNilai = new ModelNilai();
    }
    public function index()
    {

        $dataNilai = $this->tableNilai->builder('nilai n')->join('mahasiswa m', 'm.nim=n.nim_mahasiswa')
            ->join('matakuliah mt', 'mt.kode_matkul=n.id_matkul')->get()->getResultArray();

        $data = [
            'title' => 'Nilai',
            'nilai' => $dataNilai
        ];

        return view('nilai/vw_nilai', $data);
    }

    public function formNilai()
    {

        $tableMahasiswa = new ModelMahasiswa();
        $tableMatakuliah = new ModelMatakuliah();
        $data = [
            'title' => 'Form Nilai',
            'mahasiswa' => $tableMahasiswa->findAll(),
            'matakuliah' => $tableMatakuliah->findAll()
        ];


        return view('nilai/formNilai', $data);
    }

    public function addNilai()
    {
        $nim = $this->request->getPost('mahasiswa');
        $matakuliah = $this->request->getPost('matakuliah');
        $nilai_tugas = $this->request->getPost('nilai_tugas');
        $nilai_uts = $this->request->getPost('nilai_uts');
        $nilai_uas = $this->request->getPost('nilai_uas');

        $rata_rata = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;

        $validation = \Config\Services::validation();
        $validation->setRules([
            'mahasiswa' => [
                'label' => 'Mahasiswa',
                'rules' => 'required'
            ],
            'matakuliah' => [
                'label' => 'Matakuliah',
                'rules' => 'required'
            ],
            'nilai_tugas' => [
                'label' => 'Nilai Tugas',
                'rules' => 'required|numeric'
            ],
            'nilai_uts' => [
                'label' => 'Nilai UTS',
                'rules' => 'required|numeric'
            ],
            'nilai_uas' => [
                'label' => 'Nilai UAS',
                'rules' => 'required|numeric'
            ],
        ]);

        $data = [
            'mahasiswa' => $nim,
            'matakuliah' => $matakuliah,
            'nilai_tugas' => $nilai_tugas,
            'nilai_uts' => $nilai_uts,
            'nilai_uas' => $nilai_uas
        ];

        if (!$validation->run($data)) {

            session()->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        } else {
            $this->tableNilai->insert([
                'nim_mahasiswa' => $nim,
                'id_matkul' => $matakuliah,
                'nilai_uts' => $nilai_uts,
                'nilai_uas' => $nilai_uas,
                'nilai_tugas' => $nilai_tugas,
                'rata_rata' => $rata_rata
            ]);

            session()->setFlashdata('success', 'Data Nilai Berhasil Ditambahkan');
            return redirect()->to(base_url('nilai'))->withInput();
        }
    }
}