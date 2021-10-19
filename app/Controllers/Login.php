<?php

namespace App\Controllers;

use App\Models\Model_User;

class Login extends BaseController
{
    /**
     * Instance of the main Request object.
     *
     * @var IncomingRequest
     */
    protected $request;
    public function index()
    {

        $data = [
            'judul' => 'Login',
            'validation' => \Config\Services::validation()

        ];
        helper(['form']);
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
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 8 karakter'

                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('login')->withInput()->with('validation', $validation);
        }
        // end validation input


        //Validasi akun
        $sesi = session();
        $userModel = new Model_User();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cekEmail = $userModel->where('email', $email)->first();
        
        if ($cekEmail) {
            if ($cekEmail['password'] != $password) {
                session()->setFlashdata('gagal', 'Password salah');
                return redirect()->to('login');
            }

            session()->set('email', $email);
            $ses_user = [
                'id'     => $cekEmail['id'],
                'email'     => $cekEmail['email'],
                'nama'     => $cekEmail['nama'],
                'level'     => $cekEmail['level'],
                'logged_in'     => TRUE
            ];
            $sesi->set($ses_user);
            if ($cekEmail['level'] == 1) {
                return redirect()->to('admin');
            } else if ($cekEmail['level'] == 2) {
                return redirect()->to('penjual');
            } else if ($cekEmail['level'] == 3) {
            } else {
            }
        } else {
            session()->setFlashdata('gagal', 'Akun tidak terdaftar');
            return redirect()->to('login');
        }
    }


    public function logout() //Logout
    {
        $session = session();
        $session->destroy(); //Hapus sesi
        return redirect()->to('/login');
    }
}
