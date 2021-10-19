<?php

namespace App\Controllers;

class Pembeli extends BaseController
{
    public function index()
    {
        if (session('level') == 1) {
            return redirect()->to(site_url('admin'));
        }
        if (session('level') == 2) {
            return redirect()->to(site_url('penjual'));
        }
        $data = [
            'judul' => 'Landing Page'
        ];
        echo view('tampilan/header', $data);
        echo view('tampilan/top_bar');
        echo view('pembeli/index', $data);
        echo view('tampilan/modal', $data);
        echo view('tampilan/footer');
        // echo view('tes', $data);
    }

    public function login()
    {
        //validasi input
        if ($this->validate([
            'email' => 'required | valid_email',
            'password' => 'required | min_length[8]'
        ])) {
        }
    }
}
