<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class C_Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Aplikasi PPDB'
        ];
        return view('v_home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang PPDB'
        ];
        return view('v_about', $data);
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Cek Pengumuman'
        ];
        return view('v_pengumuman', $data);
    }
}
