<?php

namespace App\Models;

use CodeIgniter\Model;

class Msiswa extends Model
{
    public function getAlldata()
    {
        return $this->db->table('tbl_siswa')
            ->orderBy('id_siswa', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_siswa')->insert($data);
    }
}
