<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Landing Page'
        ];
        echo view('tampilan/header', $data);
        echo view('landingpage/top_bar');
        echo view('landingpage/index', $data);
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
