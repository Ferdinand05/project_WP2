<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
    protected $tableUsers;
    public function __construct()
    {
        $this->tableUsers = new ModelUser();
    }
    public function index($username)
    {

        $username = base64_decode($username);
        $dataUser = $this->tableUsers->where('username', $username)->get()->getRowArray();
        $data = [
            'title' => 'User Profile',
            'user' => $dataUser
        ];



        return view('user/vw_user', $data);
    }

    public function list()
    {



        $data = [
            'title' => 'Daftar User',
            'user' => $this->tableUsers->findAll()
        ];

        return view('user/list', $data);
    }
}
