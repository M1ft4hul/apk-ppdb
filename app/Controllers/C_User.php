<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mlogin;

class C_User extends BaseController
{
    public function __construct()
    {
        $this->Mlogin = new Mlogin();
        helper(['form']);
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB SMK',
            'subtitle' => 'User',
            'page_title' => 'Halaman User',
            'user' => $this->Mlogin->Tampil_data(),
        ];
        return view('admin/v_user', $data);
    }

    public function tambahData()
    {
        $file = $this->request->getFile('foto');
        $nama_file = $file->getRandomName();
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'foto' => $nama_file
        ];
        // upload file foto
        $file->move('foto_kota', $nama_file);

        $this->Mlogin->insertData($data);
        session()->setFlashdata('tambah_user', 'Data Berhasil Di Tambahkan !!!');
        return redirect()->to(base_url('/user'));
    }

    public function editData($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
            'pendidikan' => $this->request->getPost(),
        ];
        $this->Mpendidikan->editData($data);
        session()->setFlashdata('edit', 'Data berhasil Di Edit !!!');
        return redirect()->to(base_url('/pendidikan'));
    }

    public function deleteData($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
        ];
        $this->Mpendidikan->deleteData($data);
        session()->setFlashdata('hapus_berhasil', 'Data Terhapus!');
        return redirect()->to(base_url('/pendidikan'));
    }
}
