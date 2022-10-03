<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Datajurusan extends BaseController
{
    public function __construct()
    {
        $this->jurusanModel = new \App\Models\Admin\DataJurusanlModel();
    }

    public function index()
    {
        $data = [
            'title'         => 'Data Jurusan',
            'dataJurusan'   => $this->jurusanModel->findAll()
        ];

        return view("admin/datajurusan/index", $data);
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        $this->jurusanModel->save($data);

        $data = [
            'judul'  => 'Data Jurusan',
            'pesan' => 'Data Jurusan berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/datajurusan/');
    }

    public function hapus($id)
    {
        $this->jurusanModel->delete($id);

        $data = [
            'judul'  => 'Data Jurusan',
            'pesan' => 'Jurusan berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/datajurusan');
    }

    public function edit($id)
    {
        $data = $this->jurusanModel->find($id);

        $this->session->setFlashdata("edit", $data);

        return redirect()->to("/admin/datajurusan");
    }

    public function simpan($id)
    {
        $data = $this->request->getPost();
        $this->jurusanModel->update($id, $data);

        $data = [
            'judul'  => 'Data Jurusan',
            'pesan' => 'Jurusan berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/datajurusan/');
    }
}
