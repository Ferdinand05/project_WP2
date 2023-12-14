<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;

class Mahasiswa extends BaseController
{
    protected $tableMahasiswa;
    public function __construct()
    {
        $this->tableMahasiswa = new ModelMahasiswa();
    }
    public function index()
    {


        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $this->tableMahasiswa->findAll()

        ];

        return view('mahasiswa/vw_mahasiswa', $data);
    }



    public function formMahasiswa()
    {

        $data = [
            'title' => 'Mahasiswa'
        ];
        return view('mahasiswa/formMahasiswa', $data);
    }


    public function addMahasiswa()
    {
        $nim = $this->request->getPost('nim', FILTER_SANITIZE_SPECIAL_CHARS);
        $nama = $this->request->getPost('nama', FILTER_SANITIZE_SPECIAL_CHARS);
        $alamat = $this->request->getPost('alamat', FILTER_SANITIZE_SPECIAL_CHARS);
        $telepon = $this->request->getPost('telepon', FILTER_SANITIZE_SPECIAL_CHARS);

        $data = [
            'nim' => $nim,
            'alamat' => $alamat,
            'nama' => $nama,
            'telepon' => $telepon
        ];

        $validation = \Config\Services::validation();
        $validation->setRules([
            'nim' => [
                'label' => 'Nomor Induk Mahasiswa',
                'rules' => 'required|is_unique[mahasiswa.nim]'
            ],
            'nama' => [
                'label' => 'Nama Mahasiswa',
                'rules' => 'required|string'
            ],
            'alamat' => [
                'label' => 'Alamat Mahasiswa',
                'rules' => 'required|string'
            ],
            'telepon' => [
                'label' => 'No Telepon Mahasiswa',
                'rules' => 'required|numeric'
            ]
        ]);

        if (!$validation->run($data)) {
            session()->setFlashdata('error', $validation->listErrors('list'));
            return redirect()->back()->withInput();
        } else {
            $this->tableMahasiswa->insert([
                'nim' => $nim,
                'nama' => $nama,
                'alamat' => $alamat,
                'telepon' => $telepon
            ]);

            session()->setFlashdata('success', 'Data Mahasiswa Berhasil Ditambahkan!');

            return redirect()->to(base_url('mahasiswa'))->withInput();
        }
    }

    public function dropMahasiswa($nim)
    {
        $nim = base64_decode($nim);

        $this->tableMahasiswa->delete($nim);

        session()->setFlashdata('success', 'Data berhasil Dihapus!');

        return redirect()->back()->withInput();
    }
}
