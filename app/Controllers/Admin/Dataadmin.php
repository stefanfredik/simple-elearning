<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dataadmin extends BaseController
{
    public function __construct()
    {
        $this->adminModel = new \App\Models\Admin\DataAdminModel();
    }

    public function index()
    {

        $adminModel = new \App\Models\Admin\DataAdminModel();

        $data = [
            'title' => "Data Admin",
            'dataAdmin'  => $adminModel->findAll()
        ];


        return view("admin/dataadmin/index", $data);
    }

    public function tambah()
    {
        // $validation = $this->validation->setRules();
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
            return redirect()->to('/admin/dataadmin')->withInput();
        }

        $data = [
            'email' => $this->request->getVar("email"),
            'nama'  => $this->request->getVar("nama"),
            'jenis_kelamin'  => $this->request->getVar("jenis_kelamin"),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        $this->adminModel->save($data);


        $data = [
            'judul'  => 'Data Admin',
            'pesan' => 'Data Admin berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/dataadmin/');
    }

    public function edit($id)
    {
        $data = $this->adminModel->find($id);
        $this->session->setFlashdata("edit", $data);

        return redirect()->to("/admin/dataadmin");
    }

    public function simpan($id)
    {
        $data = $this->request->getPost();
        $this->adminModel->update($id, $data);

        $data = [
            'judul'  => 'Data Admin',
            'pesan' => 'Data Admin berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        // dd($this->session->getFlashdata('pesan'));

        return redirect()->to('/admin/dataadmin/');
    }

    public function hapus($id)
    {
        $this->adminModel->delete($id);

        $data = [
            'judul'  => 'Data Admin',
            'pesan' => 'Data Admin berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/dataadmin');
    }

    public function ubahpassword($id)
    {
        $data = $this->adminModel->find($id);
        $this->session->setFlashdata("ubahpassword", $data);
        return redirect()->to("/admin/dataadmin");
    }

    public function simpanpassword($id)
    {
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

            return redirect()->to('/admin/dataadmin');
        }

        $data = [
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        $this->adminModel->update($id, $data);



        $data = [
            'judul'  => 'Password Admin',
            'pesan' => 'Password Admin berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to("/admin/dataadmin");
    }
}
