<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        if (session('level') == 2) {
            return redirect()->to(site_url('penjual'));
        }
        if (session('level') == 3) {
            return redirect()->to(site_url('pembeli'));
        }
        $data = [
            'judul' => 'Admin'
        ];
        echo view('tampilan/header', $data);
        echo view('admin/sidebar');
        echo view('admin/top_bar');
        echo view('admin/index', $data);
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
