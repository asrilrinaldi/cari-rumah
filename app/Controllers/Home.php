<?php

namespace App\Controllers;

use App\Models\Model_Iklan;

class Home extends BaseController
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
        $data = [
            'judul' => 'Landing Page',
            'iklan' => $this->model->getAllData()
        ];
        echo view('tampilan/header', $data);
        echo view('landingpage/top_bar');
        echo view('landingpage/index', $data);
        echo view('tampilan/modal', $data);
        echo view('tampilan/footer');
        // echo view('tes', $data);
    }
}
