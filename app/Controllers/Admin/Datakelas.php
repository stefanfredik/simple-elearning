<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\DataJurusanlModel;
use App\Models\Admin\DataRuangankelas;

class Datakelas extends BaseController
{
    public function __construct()
    {
        $this->dataRuangan =  new DataRuangankelas();
        $this->dataJurusan =  new DataJurusanlModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Ruangan Kelas',
            'dataRuangan' => $this->dataRuangan->findAll(),
            'jurusan'   => $this->dataJurusan->findAll()
        ];

        return view('/admin/dataruangankelas/index', $data);
    }

    public function tambah()
    {
        $data = $this->request->getPost();

        // dd($data);

        $this->dataRuangan->save($data);

        $data = [
            'judul'  => 'Data Ruangan Kelas',
            'pesan' => 'Data Ruangan Kelas berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/datakelas/');
    }

    public function edit($id)
    {
        $data = $this->dataRuangan->find($id);

        $this->session->setFlashdata("edit", $data);

        return redirect()->to("/admin/datakelas");
    }


    public function simpan($id)
    {
        $data = $this->request->getPost();
        $this->dataRuangan->update($id, $data);

        $data = [
            'judul'  => 'Data Ruangan Kelas',
            'pesan' => 'Data Ruangan Kelas berhasil diubah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        // dd($this->session->getFlashdata('pesan'));

        return redirect()->to('/admin/datakelas/');
    }


    public function hapus($id)
    {
        $this->dataRuangan->delete($id);

        $data = [
            'judul'  => 'Data Ruangan Kelas',
            'pesan' => 'Data Ruangan Kelas berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/datakelas');
    }
}
