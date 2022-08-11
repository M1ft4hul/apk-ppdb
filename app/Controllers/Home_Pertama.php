<?php

namespace App\Controllers;

use App\Models\Msekolah;
use App\Models\Mjurusan;


class Home_Pertama extends BaseController
{

    public function index()
    {
        $sekolah = new Msekolah();

        $data = array(
            'title' => 'PPDB SMK 2022',
            'sekolah' => $sekolah->orderBy('id_sekolah', 'ASC')->findAll()
        );
        return view('home_pertama', $data);
    }

    function action()
    {
        if ($this->request->getVar('action')) {
            $action = $this->request->getVar('action');

            if ($action == 'jurusan_smk') {

                $jurusanModel = new Mjurusan();

                $jurusandaata = $jurusanModel->where('id_sekolah', $this->request->getVar('id_sekolah'))->findAll();

                echo json_encode($jurusandaata);
            }
        }
    }
}
