<?php

namespace App\Models;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class Model_Akun extends Model
{
    protected $table = 'user';
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
    public function tambah($data)
    {
        return $this->db->table('user')->insert($data);
    }
    public function hapus($id)
    {
        return $this->db->table('user')->delete(['id' => $id]);
    }
    public function edit($data, $id)
    {
        return $this->builder->update($data, ['id' => $id]);
    }
}
