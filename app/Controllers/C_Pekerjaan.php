<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mpekerjaan;

class C_Pekerjaan extends BaseController
{
    public function __construct()
    {
        $this->Mpekerjaan = new Mpekerjaan();
        helper(['form']);
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB SMK',
            'subtitle' => 'Pekerjaan',
            'page_title' => 'Halaman Pekerjaan',
            'pekerjaan' => $this->Mpekerjaan->Tampil_data(),
        ];
        return view('admin/v_pekerjaan', $data);
    }

    public function tambahData()
    {
        $data = [
            'pekerjaan' => $this->request->getPost(),
        ];
        $this->Mpekerjaan->insertData($data);
        session()->setFlashdata('tambah_pekerjaan', 'Data Berhasil Di Tambahkan !!!');
        return redirect()->to(base_url('/pekerjaan'));
    }

    public function editData($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
            'pekerjaan' => $this->request->getPost(),
        ];
        $this->Mpekerjaan->editData($data);
        session()->setFlashdata('edit', 'Data berhasil Di Edit !!!');
        return redirect()->to(base_url('/pekerjaan'));
    }

    public function deleteData($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
        ];
        $this->Mpekerjaan->deleteData($data);
        session()->setFlashdata('hapus_berhasil', 'Data Terhapus!');
        return redirect()->to(base_url('/pekerjaan'));
    }
}
