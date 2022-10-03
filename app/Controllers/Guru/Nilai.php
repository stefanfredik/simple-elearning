<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Database\Migrations\Guru\NilaiModel;
use App\Models\Guru\NilaiModel as GuruNilaiModel;

class Nilai extends BaseController {

    public function __construct() {
        $this->nilaiModel = new GuruNilaiModel();
    }

    public function index() {
        $id = $this->session->get("id");


        // Data kelas
        $db =  \Config\Database::connect();
        $builder = $db->table("datajadwal");
        $builder->distinct("kelas");
        $builder->select("dataruangankelas.nama_ruangan");
        $builder->select("dataruangankelas.id");
        $builder->join("dataguru", "datajadwal.guru = dataguru.id");
        $builder->join("dataruangankelas", "dataruangankelas.id = datajadwal.kelas");
        $builder->where("datajadwal.guru", $id);
        $kelas =   $builder->get()->getResultArray();


        // data matapelajaran
        $db =  \Config\Database::connect();
        $builder = $db->table("datajadwal");

        $builder->distinct("mapel");
        $builder->select("datamapel.*");
        $builder->join("dataguru", "datajadwal.guru = dataguru.id");
        $builder->join("datamapel", "datajadwal.mapel = datamapel.id");
        $builder->where("datajadwal.guru", $id);
        $mapel =   $builder->get()->getResultArray();

        // dd($mapel);
        // dd($kelas);

        $data = [
            "title" => "Nilai Siswa",
            "nilai" => $this->nilaiModel->findAll(),
            "kelas" => $kelas,
            "mapel" => $mapel
        ];



        return view("guru/nilai/index", $data);
    }

    public function getdata() {
        $id = $this->session->get("id");


        // Data kelas
        $db =  \Config\Database::connect();
        $builder = $db->table("datajadwal");
        $builder->distinct("kelas");
        $builder->select("dataruangankelas.nama_ruangan");
        $builder->select("dataruangankelas.id");
        $builder->join("dataguru", "datajadwal.guru = dataguru.id");
        $builder->join("dataruangankelas", "dataruangankelas.id = datajadwal.kelas");
        $builder->where("datajadwal.guru", $id);
        $dtkelas =   $builder->get()->getResultArray();


        // data matapelajaran
        $db =  \Config\Database::connect();
        $builder = $db->table("datajadwal");
        $builder->distinct("mapel");
        $builder->select("datamapel.*");
        $builder->join("dataguru", "datajadwal.guru = dataguru.id");
        $builder->join("datamapel", "datajadwal.mapel = datamapel.id");
        $builder->where("datajadwal.guru", $id);
        $dtmapel =   $builder->get()->getResultArray();

        // Datasiswa
        // $db =  \Config\Database::connect();
        // $builder = $db->table("datasiswa");
        // $builder->select("datasiswa.*");
        // $builder->join("dataguru", "datajadwal.guru = dataguru.id");
        // $builder->join("datamapel", "datajadwal.mapel = datamapel.id");
        // $builder->where("datajadwal.guru", $id);
        // $dtmapel =   $builder->get()->getResultArray();

        // dd($mapel);
        // dd($kelas);




        // ----------------------

        $id = $this->session->get("id");
        $kelas = $this->request->getPost('kelas');
        $mapel = $this->request->getPost('mapel');

        // dd($mapel);

        // Data Tugas
        $db =  \Config\Database::connect();
        $builder = $db->table("tugas");
        $builder->select("hasiltugas.*");
        $builder->select("datasiswa.nama");
        $builder->select("dataruangankelas.id");
        $builder->join("dataguru", "dataguru.id = tugas.guru");
        $builder->join("dataruangankelas", "dataruangankelas.id = tugas.kelas");
        $builder->join("hasiltugas", "hasiltugas.tugas = tugas.id");
        $builder->join("datasiswa", "hasiltugas.siswa = datasiswa.id");
        $builder->where("tugas.guru", $id);
        $builder->where("tugas.mapel", $mapel);
        $builder->where("tugas.kelas", $kelas);
        $tugas =   $builder->get()->getResultArray();

        // Data Tugas
        $db =  \Config\Database::connect();
        $builder = $db->table("tugas");
        $builder->select("tugas.*");
        $builder->join("dataguru", "dataguru.id = tugas.guru");
        $builder->join("dataruangankelas", "dataruangankelas.id = tugas.kelas");
        $builder->join("hasiltugas", "hasiltugas.tugas = tugas.id");
        $builder->join("datasiswa", "hasiltugas.siswa = datasiswa.id");
        $builder->where("tugas.guru", $id);
        $builder->where("tugas.mapel", $mapel);
        $builder->where("tugas.kelas", $kelas);
        $jumlahtugas =  $builder->countAllResults();

        // dd($jumlahtugas);






        $data = [
            "title" => "Nilai Siswa",
            "kelas" => $dtkelas,
            "mapel" => $dtmapel,
            "tugas" => $tugas,
            "jumlahtugas" => $jumlahtugas
        ];

        return view("/guru/nilai/data", $data);
        // dd($tugas);
    }
}
