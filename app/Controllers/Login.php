<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {

        $data = [
            'judul' => 'Login',
            'validation' => \Config\Services::validation()
        ];

        echo view('tampilan/header', $data);
        echo view('login/index', $data);
        echo view('tampilan/footer');
    }

    public function login()
    {
        //validasi input
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'valid_email' => 'Format {field} salah'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'

                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('login')->withInput()->with('validation', $validation);
        }
    }
}
