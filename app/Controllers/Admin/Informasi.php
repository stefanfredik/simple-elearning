<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\DataInformasi;

class Informasi extends BaseController {
    public function __construct() {
        $this->dataInformasi = new DataInformasi();
    }

    public function index() {
        $data = [
            'title' => 'Data Informasi',
            'dataInformasi' => $this->dataInformasi->findAll(),
        ];

        return view('admin/informasi/index', $data);
    }

    public function tambah() {
        $data = $this->request->getPost();
        $this->dataInformasi->save($data);

        $data = [
            'judul'  => 'Data Informasi',
            'pesan' => 'Informasi berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);


        return redirect()->to('/admin/informasi/');
    }

    public function hapus($id) {
        $this->dataInformasi->delete($id);

        $data = [
            'judul'  => 'Data Informasi',
            'pesan' => 'Informasi berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
        return redirect()->to('/admin/informasi');
    }

    public function edit($id) {
        $data = $this->dataInformasi->find($id);

        $this->session->setFlashdata("edit", $data);

        return redirect()->to("/admin/informasi");
    }


    public function simpan($id) {
        $data = $this->request->getPost();
        $this->dataInformasi->update($id, $data);

        $data = [
            'judul'  => 'Data Informasi',
            'pesan' => 'Informasi berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        // dd($this->session->getFlashdata('pesan'));

        return redirect()->to('/admin/informasi/');
    }
}
