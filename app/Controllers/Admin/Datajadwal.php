<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Database\Migrations\DataMapel;
use App\Models\Admin\AdminGuruModel;
use App\Models\Admin\DataJadwalModel;
use App\Models\Admin\DataMapelModel;
use App\Models\Admin\DataRuangankelas;

class DataJadwal extends BaseController
{
    public function __construct()
    {
        $this->dataJadwal = new DataJadwalModel();
        $this->dataKelas = new DataRuangankelas();
        $this->dataGuru = new AdminGuruModel();
        $this->dataMapel = new DataMapelModel();
        // $this->dataJurusan = new DataJurusanlModel();
    }

    public function index()
    {

        $db      = db_connect();

        $builder = $db->table('datajadwal');

        $builder->select('datajadwal.id');
        // $builder->from('datajadwal');
        $builder->select('hari,jam,nama_ruangan,nama_mapel,nama,');
        $builder->join('dataguru', 'dataguru.id = datajadwal.guru', 'left');
        $builder->join('dataruangankelas', 'dataruangankelas.id = datajadwal.kelas', 'left');
        $builder->join('datamapel', 'datamapel.id = datajadwal.mapel', 'left');

        $query = $builder->get();
        $jadwal = $query->getResultArray();


        // Cara ini juga bisa dipakai
        // $query = $db->query("SELECT hari,jam,dk.nama_kelas,dm.nama_mapel,dg.nama FROM datajadwal dj
        // INNER JOIN datakelas dk  ON dj.kelas = dk.id
        // INNER JOIN datamapel dm ON dj.mapel = dm.id
        // INNER JOIN dataguru dg  ON dj.guru = dg.id");
        // dd($query->getResultArray());

        $data = [
            'title' => 'Data Jadwal',
            'dataJadwal' => $query->getResultArray(),
            'dataKelas' => $this->dataKelas->findAll(),
            'dataMapel' => $this->dataMapel->findAll(),
            'dataGuru' => $this->dataGuru->findAll(),
            'jadwal'    => $jadwal
        ];

        return view('admin/datajadwal/index', $data);
    }


    public function tambah()
    {
        $data = [
            'hari'  => $this->request->getVar("hari"),
            'jam'   => $this->request->getVar("jamawal") . " - " . $this->request->getVar("jamakhir"),
            'kelas' => $this->request->getVar("kelas"),
            'mapel' => $this->request->getVar("mapel"),
            'guru' => $this->request->getVar("guru")
        ];

        $this->dataJadwal->save($data);

        $data = [
            'judul'  => 'Data Jadwal Kelas',
            'pesan' => 'Data Jadwal Kelas berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/datajadwal/');
    }

    public function edit($id)
    {
        $data = $this->dataJadwal->find($id);

        $this->session->setFlashdata("edit", $data);

        return redirect()->to("/admin/datajadwal");
    }

    public function simpan($id)
    {
        $data = $this->request->getPost();
        $data['jam'] = $this->request->getVar("jamawal") . " - " . $this->request->getVar("jamakhir");
        $this->dataJadwal->update($id, $data);

        $data = [
            'judul'  => 'Data Jadwal',
            'pesan' => 'Data Jadwal berhasil diubah!',
            'type'  => 'success'
        ];


        $this->session->setFlashdata('pesan', $data);

        // dd($this->session->getFlashdata('pesan'));

        return redirect()->to('/admin/datajadwal/');
    }

    public function hapus($id)
    {
        $this->dataJadwal->delete($id);

        $data = [
            'judul'  => 'Data Jadwal',
            'pesan' => 'Data Jadwal berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('/admin/datajadwal');
    }
}
