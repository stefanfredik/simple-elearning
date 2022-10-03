<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\DataRuangankelas;

class Dataguru extends BaseController {
    public function __construct() {
        $this->guruModel = new \App\Models\Admin\AdminGuruModel();
    }
    public function index() {
        helper("Admin/Guru");

        $adminGuruModel = new \App\Models\Admin\AdminGuruModel();
        $dataKelas = new DataRuangankelas();

        // dd(getAllRuanganKelas());

        $data = [
            'kelas' => $dataKelas->findAll(),
            'title' => "Data Guru",
            'dataGuru'  => getAllRuanganKelas()
        ];


        return view("admin/dataguru/index", $data);
    }

    public function tambah() {
        $rules = [
            'email' => [
                'rules' => 'required|is_unique[dataguru.email]|is_unique[dataadmin.email]|is_unique[datasiswa.email]',
                'errors'    => [
                    'is_unique' => 'Email sudah terdaftar.'
                ]
            ],

            'password'  => [
                'rules' => 'min_length[6]|required',
                'errors'    => [
                    'min_length'    => 'Password kurang dari 6 digit.',
                ]
            ],

            'konfirmasi_password' => [
                'rules' => 'required|min_length[6]|matches[password]',
                'errors' => [
                    'matches' => 'Passsword tidak sama.',
                    'min_length'    => 'Password kurang dari 6 digit.',
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            $this->session->setFlashdata("tambah", true);
            return redirect()->to('/admin/dataguru')->withInput();
        }



        $data = $this->request->getPost();
        $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

        if ($data["status"]  == "Walikelas") {
            $data["status"] = $data["walikelas"];
        }

        $this->guruModel->save($data);

        $data = [
            'judul'  => 'Data Guru',
            'pesan' => 'Guru berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/dataguru/');
    }

    public function edit($id) {
        $data = $this->guruModel->find($id);
        $this->session->setFlashdata("edit", $data);

        return redirect()->to("/admin/dataguru");
    }

    public function simpan($id) {
        $data = $this->request->getPost();

        if ($data["status"]  == "Walikelas") {
            $data["status"] = $data["walikelas"];
        }

        $this->guruModel->update($id, $data);

        $data = [
            'judul'  => 'Data Guru',
            'pesan' => 'Data Guru berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        // dd($this->session->getFlashdata('pesan'));

        return redirect()->to('/admin/dataguru/');
    }
    public function hapus($id) {
        $this->guruModel->delete($id);

        $data = [
            'judul'  => 'Data Guru',
            'pesan' => 'Data Guru berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/dataguru');
    }


    public function ubahpassword($id) {
        $data = $this->guruModel->find($id);
        $this->session->setFlashdata("ubahpassword", $data);
        return redirect()->to("/admin/dataguru");
    }

    public function simpanpassword($id) {
        $rules = [
            'password'  => [
                'rules' => 'min_length[6]|required',
                'errors'    => [
                    'min_length'    => 'Password kurang dari 6 digit.',
                ]
            ],

            'konfirmasi_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'matches' => 'Passsword tidak sama.',
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            $data = $this->validator;
            // dd($data->getError());
            $data = [
                'judul'  => 'Gagal Mengubah Password',
                'pesan' => $this->validator->getError("password") . " <br>" . $this->validator->getError("konfirmasi_password"),
                'type'  => 'error'
            ];


            $this->session->setFlashdata('pesan', $data);

            return redirect()->to('/admin/dataguru');
        }

        $data = [
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        $this->guruModel->update($id, $data);



        $data = [
            'judul'  => 'Password Guru',
            'pesan' => 'Password Guru berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to("/admin/dataguru");
    }
}
