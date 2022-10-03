<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\DataMapelModel;

class Datamapel extends BaseController
{
    public function __construct()
    {
        $this->dataMapel = new DataMapelModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Mata Pelajaran',
            'dataMapel' => $this->dataMapel->findAll()
        ];


        return view('/admin/datamapel/index', $data);
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        $this->dataMapel->save($data);

        $data = [
            'judul'  => 'Data Mata Pelajaran',
            'pesan' => 'Data Mata Pelajaran berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);


        return redirect()->to('/admin/datamapel/');
    }

    public function hapus($id)
    {
        $this->dataMapel->delete($id);

        $data = [
            'judul'  => 'Data Mata Pelajaran',
            'pesan' => 'Data Mata Pelajaran berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
        return redirect()->to('/admin/datamapel');
    }

    public function edit($id)
    {
        $data = $this->dataMapel->find($id);

        $this->session->setFlashdata("edit", $data);

        return redirect()->to("/admin/datamapel");
    }

    public function simpan($id)
    {
        $data = $this->request->getPost();
        $this->dataMapel->update($id, $data);

        $data = [
            'judul'  => 'Data Mata Pelajaran',
            'pesan' => 'Data Mata Pelajaran berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        // dd($this->session->getFlashdata('pesan'));

        return redirect()->to('/admin/datamapel/');
    }
}
