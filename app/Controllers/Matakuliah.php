<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMatakuliah;

class Matakuliah extends BaseController
{
    protected $tableMatakuliah;
    public function __construct()
    {
        $this->tableMatakuliah = new ModelMatakuliah();
    }
    public function index()
    {

        $data = [
            'title' => 'Matakuliah',
            'matakuliah' => $this->tableMatakuliah->findAll()
        ];

        return view('matakuliah/vw_matakuliah', $data);
    }
    public function formMatakuliah()
    {

        $data = [
            'title' => 'Form Matakuliah'
        ];

        return view('matakuliah/formMatakuliah', $data);
    }

    public function addMatakuliah()
    {
        $kode_matkul = $this->request->getPost('kode_matkul');
        $nama_matkul = $this->request->getPost('nama_matkul');
        $dosen_matkul = $this->request->getPost('dosen_matkul');

        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_matkul' => [
                'label' => 'Kode Matakuliah',
                'rules' => 'required|is_unique[matakuliah.kode_matkul]|max_length[5]'
            ],
            'nama_matkul' => [
                'label' => 'Nama Matakuliah',
                'rules' => 'required'
            ],
            'dosen_matkul' => [
                'label' => 'Dosen Matakuliah',
                'rules' => 'required'
            ]
        ]);

        $data = [
            'kode_matkul' => $kode_matkul,
            'nama_matkul' => $nama_matkul,
            'dosen_matkul' => $dosen_matkul
        ];

        if (!$validation->run($data)) {
            session()->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        } else {

            $this->tableMatakuliah->insert([
                'kode_matkul' => $kode_matkul,
                'dosen_matkul' => $dosen_matkul,
                'nama_matkul' => $nama_matkul
            ]);

            session()->setFlashdata('success', 'Data Matakuliah Berhasil DITAMBAHKAN!');
            return redirect()->to(base_url('matakuliah'))->withInput();
        }
    }

    public function deleteMatkul($kode_matkul)
    {

        $kode_matkul = base64_decode($kode_matkul);

        $this->tableMatakuliah->delete($kode_matkul);
        session()->setFlashdata('success', 'Data Matakuliah Berhasil DIHAPUS!');
        return redirect()->to(base_url('matakuliah'))->withInput();
    }

    public function editMatakuliah($kode_matkul)
    {
        $kode_matkul = base64_decode($kode_matkul);
        $matkul = $this->tableMatakuliah->find($kode_matkul);
        $data =  [
            'title' => 'Form Matakuliah',
            'matakuliah' => $matkul
        ];

        return view('matakuliah/editMatakuliah', $data);
    }

    public function updateMatakuliah()
    {
        $kode_matkul = $this->request->getPost('kode_matkul');
        $nama_matkul = $this->request->getPost('nama_matkul');
        $dosen_matkul = $this->request->getPost('dosen');

        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_matkul' => [
                'label' => 'Kode Matakuliah',
                'rules' => 'max_length[5]|is_unique[matakuliah.kode_matkul,kode_matkul,' . $kode_matkul . ']'
            ],
            'nama_matkul' => [
                'label' => 'Nama Matakuliah',
                'rules' => 'required'
            ],
            'dosen_matkul' => [
                'label' => 'Dosen Matakuliah',
                'rules' => 'required'
            ]
        ]);

        $data = [
            'kode_matkul' => $kode_matkul,
            'nama_matkul' => $nama_matkul,
            'dosen_matkul' => $dosen_matkul
        ];
        if (!$validation->run($data)) {
            session()->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        } else {

            $this->tableMatakuliah->update($kode_matkul, [
                'kode_matkul' => $kode_matkul,
                'dosen_matkul' => $dosen_matkul,
                'nama_matkul' => $nama_matkul
            ]);

            session()->setFlashdata('success', 'Data Matakuliah Berhasil DIUPDATE!');
            return redirect()->to(base_url('matakuliah'))->withInput();
        }
    }
}
