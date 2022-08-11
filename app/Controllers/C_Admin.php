<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class C_Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PPDB SMK',
            'subtitle' => 'Dashboard',
            'page_title' => 'Halaman Dashboard'
        ];
        return view('admin/v_dashboard', $data);
    }
}
