<?php

namespace App\Controllers;

use App\Models\Msiswa;
use App\Models\Mlogin;

class C_Auth extends BaseController
{
    public function __construct()
    {
        helper(['form']);
        $this->Msiswa = new Msiswa();
        $this->Mlogin = new Mlogin();
    }

    // login untuk siswa
    public function index()
    {
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Login PPDB',
            'validation' => $validation
        ];
        return view('auth/v_loginSiswa', $data);
    }

    public function Masuk_loginSiswa()
    {
    }

    // pendaftaran siswa
    public function pendaftaran()
    {

        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Pendaftaran PPDB',
            'validation' => $validation
        ];
        return view('auth/v_pendaftaranSiswa', $data);
    }

    // logika pendaftaran siswa
    public function simpanPendaftaran()
    {

        if ($this->validate([
            'nisn' => [
                'rules'  => 'required|is_unique[tbl_siswa.nisn,id,{id_siswa}]',
                'errors' => [
                    'required' => '{field} Wajib diisi!!.',
                    'is_unique' =>  '{field} Ini Sudah Terdaftar!!.'
                ]
            ],
            'npsn' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi!!.',
                ]
            ],
            'nama_siswa' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi!!.',
                ]
            ],
            'tempat_lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi!!.',
                ]
            ],
        ])) {
            $data = [
                'nisn' => $this->request->getPost('nisn'),
                'npsn' => $this->request->getPost('npsn'),
                'nama_siswa' => $this->request->getPost('nama_siswa'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'password' => $this->request->getPost('nisn'),
            ];
            $this->Msiswa->insertData($data);
            session()->setFlashdata('pesan', 'Pendaftaran berhasil, Silahkan Login untuk melengkapi data!!');
            return redirect()->to(base_url('/pendaftaranSiswa'));
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/pendaftaranSiswa'))->withInput()->with('validation', $validation);
        }
    }

    // login untuk admin ygy
    public function LoginUser()
    {
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Admin Login',
            'validation' => $validation
        ];
        return view('v_loginUser', $data);
    }

    // login untuk admin ygy
    public function cek_loginUser()
    {
        if ($this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !!',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !!!'
                ]
            ]
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->Mlogin->login($email, $password);
            if ($cek_login) {
                session()->set('nama_user', $cek_login['nama_user']);
                session()->set('email', $cek_login['email']);
                session()->set('foto', $cek_login['foto']);
                return redirect()->to(base_url('/AdminPPDB'));
            } else {
                session()->setFlashdata('pesan', 'Email atau Password salah !!!');
                return redirect()->to(base_url('/UserLogin'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/UserLogin'));
        }
    }

    public function logout()
    {
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('foto');
        session()->setFlashdata('pesan_berhasil', 'Logout Success');
        return redirect()->to(base_url('/UserLogin'));
    }
}
