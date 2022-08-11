<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mpendidikan;

class C_Pendidikan extends BaseController
{
    public function __construct()
    {
        $this->Mpendidikan =  new Mpendidikan();
        helper(['form']);
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB SMK',
            'subtitle' => 'Pendidikan',
            'page_title' => 'Halaman Pendidikan',
            'pendidikan' => $this->Mpendidikan->Tampil_data(),
        ];
        return view('admin/v_pendidikan', $data);
    }

    public function tambahData()
    {
        $data = [
            'pendidikan' => $this->request->getPost(),
        ];
        $this->Mpendidikan->insertData($data);
        session()->setFlashdata('tambah_pendidikan', 'Data Berhasil Di Tambahkan !!!');
        return redirect()->to(base_url('/pendidikan'));
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
