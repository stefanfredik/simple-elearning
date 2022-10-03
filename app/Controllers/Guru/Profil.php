<?php

namespace App\Controllers\Guru;

use App\Controllers\Admin\DataJadwal;
use App\Controllers\BaseController;
use App\Models\Admin\AdminGuruModel;
use App\Models\Admin\DataJadwalModel;
use Config\Database;

class Profil extends BaseController {
    public function __construct() {
        $this->dataGuru = new AdminGuruModel();
        $this->dataJadwal = new DataJadwalModel();
    }

    public function index() {
        $id = $this->session->get("id");

        $db =  \Config\Database::connect();
        $builder = $db->table("datajadwal");
        $builder->distinct("kelas");
        $builder->select("dataruangankelas.nama_ruangan");
        $builder->join("dataguru", "datajadwal.guru = dataguru.id");
        $builder->join("dataruangankelas", "dataruangankelas.id = datajadwal.kelas");
        $builder->where("datajadwal.guru", $id);

        $kelas =   $builder->get()->getResultArray();

        // --------------------------------------------------------
        $db =  \Config\Database::connect();
        $builder2 = $db->table("datajadwal");
        $builder2->select("datajadwal.*");
        $builder2->select("dataruangankelas.nama_ruangan");
        $builder2->select("datamapel.nama_mapel");



        $builder2->join("dataguru", "datajadwal.guru = dataguru.id");
        $builder2->join("dataruangankelas", "dataruangankelas.id = datajadwal.kelas");
        $builder2->join("datamapel", "datamapel.id = datajadwal.mapel");

        $builder2->where("datajadwal.guru", $id);
        $builder2->orderBy("hari", "DESC");

        $jadwal =   $builder2->get()->getResultArray();



        // dd($kelas);

        $data = [
            'title' => 'Halaman Profile',
            'profile' => $this->dataGuru->find($id),
            'kelas'   => $kelas,
            'jadwal'   => $jadwal
        ];

        // dd($data);

        return view("guru/profil/index", $data);
    }
}
