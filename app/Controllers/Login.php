<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Admin\AdminGuruModel;
use App\Models\Admin\DataAdminModel;
use App\Models\Admin\DataSiswaModel;

class Login extends BaseController {
    public function __construct() {
        $this->adminModel = new DataAdminModel();
        $this->guruModel = new AdminGuruModel();
        $this->siswaModel = new DataSiswaModel();
        $this->role = null;
    }

    public function index() {
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");

        $data = $this->cekUser($email);

        if (!$data) {

            $sess = [
                'judul'  => 'Login Gagal',
                'pesan' => 'Email yang anda masukan tidak terdaftar.',
                'type'  => 'error'
            ];

            $this->session->setFlashdata('pesan', $sess);
            return redirect()->to('/');

            // echo "Email tidak ditemukan";
        } else if ($data["role"] == "admin" && password_verify($password, $data["password"])) {
            $ses_data = [
                'id'       => $data['id'],
                'nama'     => $data['nama'],
                'email'    => $data['email'],
                'role'      => $data['role'],
                'login'     => TRUE
            ];

            $this->session->set($ses_data);
            return redirect()->to('admin/');
        } else if ($data["role"] == "guru" && password_verify($password, $data["password"])) {
            $ses_data = [
                'id'       => $data['id'],
                'nama'     => $data['nama'],
                'email'    => $data['email'],
                'role'      => $data['role'],
                'login'     => TRUE
            ];

            $this->session->set($ses_data);

            // dd()
            return redirect()->to('guru/');
        } else if ($data["role"] == "siswa" && password_verify($password, $data["password"])) {
            $ses_data = [
                'id'       => $data['id'],
                'nama'     => $data['nama'],
                'email'    => $data['email'],
                'role'      => $data['role'],
                'login'     => TRUE
            ];

            $this->session->set($ses_data);
            return redirect()->to('siswa/');
        } else {
            $sess = [
                'judul'  => 'Login Gagal',
                'pesan' => 'Password anda salah.',
                'type'  => 'error'
            ];

            $this->session->setFlashdata('pesan', $sess);
            return redirect()->to('/');
        }
    }

    private function cekUser($email) {
        $cek = [];
        if ($cek = $this->adminModel->where('email', $email)->first()) {
            $data = $cek;
            $data["role"]  = "admin";
        } else if ($cek =  $this->guruModel->where('email', $email)->first()) {
            $data = $cek;
            $data["role"]  = "guru";
        } else if ($cek =  $this->siswaModel->where('email', $email)->first()) {
            $data = $cek;
            $data["role"]  = "siswa";
        } else {
            return false;
        }
        return $data;
    }


    public function logout() {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
