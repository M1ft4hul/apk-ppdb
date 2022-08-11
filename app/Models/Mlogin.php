<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlogin extends Model
{
    public function login($email, $password)
    {
        return $this->db->table('tbl_user')->where(
            [
                'email' => $email,
                'password' => $password
            ]
        )->get()->getRowArray();
    }

    public function Tampil_data()
    {
        return $this->db->table('tbl_user')
        ->orderBy('id_user', 'ASC')
        ->get()
        ->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_user')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_user')
        ->where('id_user', $data['id_user'])
        ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_user')
        ->where('id_user', $data['id_user'])
        ->delete($data);
    }
}
