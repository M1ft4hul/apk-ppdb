<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Magama;

class C_Agama extends BaseController
{
    public function __construct()
    {
        $this->Magama = new Magama();
        helper(['form']);
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB SMK',
            'subtitle' => 'Agama',
            'page_title' => 'Halaman Agama',
            'agama' => $this->Magama->Tampil_data(),
        ];
        return view('admin/v_agama', $data);
    }

    public function tambahData()
    {
        $data = [
            'agama' => $this->request->getPost(),
        ];
        $this->Magama->insertData($data);
        session()->setFlashdata('tambah_agama', 'Data Berhasil Di Tambahkan !!!');
        return redirect()->to(base_url('/agama'));
    }

    public function editData($id_agama)
    {
        $data = [
            'id_agama' => $id_agama,
            'agama' => $this->request->getPost(),
        ];
        $this->Magama->editData($data);
        session()->setFlashdata('edit', 'Data berhasil Di Edit !!!');
        return redirect()->to(base_url('/agama'));
    }

    public function deleteData($id_agama)
    {
        $data = [
            'id_agama' => $id_agama,
        ];
        $this->Magama->deleteData($data);
        session()->setFlashdata('hapus_berhasil', 'Data Terhapus!');
        return redirect()->to(base_url('/agama'));
    }
}
