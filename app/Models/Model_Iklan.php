<?php

namespace App\Models;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class Model_Iklan extends Model
{
    protected $table = 'iklan';
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData()
    {
        return $this->db->table('iklan')->get()->getResultArray();
    }
    public function tambah($data)
    {
        return $this->db->table('iklan')->insert($data);
    }
    public function hapus($id)
    {
        return $this->db->table('iklan')->delete(['id' => $id]);
    }
    public function edit($data, $id)
    {
        return $this->builder->update($data, ['id' => $id]);
    }
}
