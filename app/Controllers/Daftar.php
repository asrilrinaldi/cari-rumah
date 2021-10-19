<?php

namespace App\Controllers;

use App\Models\Model_Akun;

class Daftar extends BaseController
{
    /**
     * Instance of the main Request object.
     *
     * @var IncomingRequest
     */
    protected $request;
    public function __construct()
    {
        $this->model = new Model_Akun;
    }
    public function index()
    {

        $data = [
            'judul' => 'Daftar',
            'validation' => \Config\Services::validation()

        ];
        helper(['form']);
        echo view('tampilan/header', $data);
        echo view('daftar/index', $data);
        echo view('tampilan/footer');
    }
    public function daftar()
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
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 8 karakter'

                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('daftar')->withInput()->with('validation', $validation);
        }
        //end validasi form

        //simpan akun
        $data = [
            'nama'  => $this->request->getPost('nama'),
            'email'  => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level')

        ];
        //INSERT
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('sukses', 'Pendaftaran Berhasil');
            return redirect()->to(base_url('login'));
        }
    }
}
