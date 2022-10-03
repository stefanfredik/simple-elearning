<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\DataRuangankelas;

class Datasiswa extends BaseController {
    public function __construct() {
        $this->siswaModel = new \App\Models\Admin\DataSiswaModel();
        $this->ruanganModel = new DataRuangankelas();
    }

    public function index() {

        $db      = \Config\Database::connect();
        $builder = $db->table('datasiswa');
        $builder->select("datasiswa.*");
        $builder->select("dataruangankelas.nama_ruangan");

        $builder->join("dataruangankelas", "dataruangankelas.id = datasiswa.ruangan", "left");
        $query = $builder->get();
        $dataSiswa = $query->getResultArray();

        // dd($dataSiswa);

        $data = [
            'title' => "Data Siswa",
            'dataSiswa'  => $dataSiswa,
            'ruangan'   => $this->ruanganModel->findAll()
        ];

        return view("admin/datasiswa/index", $data);
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
            return redirect()->to('/admin/datasiswa')->withInput();
        }

        $data = $this->request->getPost();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->siswaModel->save($data);

        $data = [
            'judul'  => 'Data Siswa',
            'pesan' => 'Data Siswa berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
        return redirect()->to('/admin/datasiswa/');
    }

    public function edit($id) {
        $data = $this->siswaModel->find($id);

        // dd($data);

        $this->session->setFlashdata("edit", $data);

        return redirect()->to("/admin/datasiswa");
    }

    public function simpan($id) {
        $data = $this->request->getPost();
        $this->siswaModel->update($id, $data);

        $data = [
            'judul'  => 'Data Siswa',
            'pesan' => 'Data Siswa berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        // dd($this->session->getFlashdata('pesan'));

        return redirect()->to('/admin/datasiswa/');
    }

    public function hapus($id) {
        $this->siswaModel->delete($id);

        $data = [
            'judul'  => 'Data Siswa',
            'pesan' => 'Data Siswa berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
        return redirect()->to('/admin/datasiswa');
    }


    public function ubahpassword($id) {
        $data = $this->siswaModel->find($id);
        $this->session->setFlashdata("ubahpassword", $data);
        return redirect()->to("/admin/datasiswa");
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

            return redirect()->to('/admin/datasiswa');
        }

        $data = [
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        $this->siswaModel->update($id, $data);



        $data = [
            'judul'  => 'Password Siswa',
            'pesan' => 'Password Siswa berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to("/admin/datasiswa");
    }

    public function detail($id) {
        $data = [
            "title" => "Detail Siswa",
            "ruangan" => $this->ruanganModel->findAll()
        ];

        return view("admin/datasiswa/detail", $data);
    }
}
