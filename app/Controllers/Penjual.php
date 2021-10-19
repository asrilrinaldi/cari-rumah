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
        echo view('penjual/sidebar', $data);
        echo view('penjual/top_bar', $data);
        echo view('penjual/index', $data);
        echo view('tampilan/modal', $data);
        echo view('tampilan/footer', $data);

        // echo view('penjual/index', $data);
    }
    public function tambah()
    {
        if (session('level') == 1) {
            return redirect()->to(site_url('admin'));
        }
        if (session('level') == 3) {
            return redirect()->to(site_url('pembeli'));
        }
        $data = [
            'judul' => 'Tambah Iklan'
        ];
        echo view('tampilan/header', $data);
        echo view('penjual/sidebar', $data);
        echo view('penjual/top_bar', $data);
        echo view('penjual/tambah', $data);
        echo view('tampilan/modal', $data);
        echo view('tampilan/footer', $data);

        // echo view('penjual/index', $data);
    }
    public function riwayat()
    {
        if (session('level') == 1) {
            return redirect()->to(site_url('admin'));
        }
        if (session('level') == 3) {
            return redirect()->to(site_url('pembeli'));
        }
        $data = [
            'judul' => 'Tambah Iklan'
        ];
        echo view('tampilan/header', $data);
        echo view('penjual/sidebar', $data);
        echo view('penjual/top_bar', $data);
        echo view('penjual/riwayat', $data);
        echo view('tampilan/modal', $data);
        echo view('tampilan/footer', $data);

        // echo view('penjual/index', $data);
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
