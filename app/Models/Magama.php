<?php

namespace App\Models;

use CodeIgniter\Model;

class Magama extends Model
{
    public function Tampil_data()
    {
        return $this->db->table('tbl_agama')
            ->orderBy('id_agama', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_agama')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_agama')
            ->where('id_agama', $data['id_agama'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_agama')
            ->where('id_agama', $data['id_agama'])
            ->delete($data);
    }
}
