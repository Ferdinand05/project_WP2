<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Login extends BaseController
{
    protected $tableUser;
    public function __construct()
    {
        $this->tableUser = new ModelUser();
    }
    public function index()
    {

        $data = [
            'title' => 'Login'
        ];




        return view('login/vw_login', $data);
    }

    public function loggedIn()
    {

        $username = $this->request->getPost('username');
        $password = $this->request->getVar('password');

        $checkUser = $this->tableUser->builder('users')->where('username', $username)
            ->get()->getNumRows();
        $checkPassword = $this->tableUser->builder('users')->where('username', $username)->get()->getResultArray();
        if ($checkUser > 0 && password_verify($password, $checkPassword[0]['password'])) {

            session()->set('logged_in', true);
            session()->set('username', $checkPassword[0]['username']);
            return redirect()->to(base_url('dashboard'))->withInput();
        } else {

            session()->setFlashdata('error', 'Username/Password Salah!');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();

        return redirect()->to(base_url('/'))->withInput();
    }
}
