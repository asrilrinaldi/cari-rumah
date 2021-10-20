<?php

namespace App\Controllers;

use App\Models\Model_Iklan;

class Penjual extends BaseController
{
    /**
     * Instance of the main Request object.
     *
     * @var IncomingRequest
     */
    protected $request;
    public function __construct()
    {
        $this->model = new Model_Iklan;
    }
    public function index()
    {
        if (session('level') == 1) {
            return redirect()->to(site_url('admin'));
        }
        if (session('level') == 3) {
            return redirect()->to(site_url('pembeli'));
        }
        $data = [
            'judul' => 'Penjual',
            'iklan' => $this->model->getAllData()
        ];
        helper(['form']);
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
            'judul' => 'Tambah Iklan',
            'validation' => \Config\Services::validation()
        ];
        helper(['form']);
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

    public function iklan()
    {
        //validasi input
        // $img = $this->request->getFile('foto');
        // $namaAcak = $img->getRandomName();
        // $nama = $this->request->getPost('nama');

        // echo "$nama";



        //validasi input
        if (!$this->validate([
            'namaiklan' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 5 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/png,image/jpeg,image/jpg]',
                'errors' => [
                    'uploaded' => '{field} tidak boleh kosong',
                    'max_size' => '{field} maksimal 1mb',
                    'is_image' => 'gambar tidak valid',
                    'mime_in' => 'gambar tidak valid'

                ]
            ]



        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('penjual/tambah')->withInput()->with('validation', $validation);
            return redirect()->to('penjual/tambah')->withInput();
        }

        $img = $this->request->getFile('foto');
        // dd($img);
        $namaAcak = $img->getRandomName();
        $img->move('assets/img/iklan', $namaAcak);
        $namaIklan = $img->getName();


        //simpan akun
        $data = [
            'nama'  => $this->request->getPost('namaiklan'),
            'foto'  => $namaIklan


        ];
        //INSERT
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('sukses', 'iklan berhasil ditambah');
            return redirect()->to(base_url('penjual/tambah'));
        }
    }
}
