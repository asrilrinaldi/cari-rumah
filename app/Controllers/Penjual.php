<?php

namespace App\Controllers;

class Penjual extends BaseController
{
    public function index()
    {
        if (session('level') == 1) {
            return redirect()->to(site_url('admin'));
        }
        if (session('level') == 3) {
            return redirect()->to(site_url('pembeli'));
        }
        $data = [
            'judul' => 'Penjual'
        ];
        echo view('tampilan/header', $data);
        echo view('tampilan/top_bar');
        echo view('penjual/index', $data);
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
