<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Database\Migrations\DataRuangankelas;
use App\Models\Admin\DataSiswaModel;
use App\Models\Guru\MateriModel;

class Materi extends BaseController {
    public function __construct() {
        $this->dataMateri = new MateriModel();
        $this->dataSiswa = new DataSiswaModel();
    }

    public function index() {

        $result = $this->dataSiswa->select("ruangan")->where("id", $this->session->get("id"))->first();
        // dd($result);

        $db      = \Config\Database::connect();
        $builder = $db->table('materi');
        $builder->distinct("mapel");
        $builder->select("materi.mapel");
        $builder->select("datamapel.nama_mapel");
        // $builder->select("datamapel.")
        $builder->join("datamapel", "materi.mapel = datamapel.id");
        $builder->where("materi.kelas", $result["ruangan"]);

        $query = $builder->get();
        $mapel = $query->getResultArray();



        $materi = $this->dataMateri->where("kelas", $result["ruangan"])->findAll();

        // dd($materi);


        $data = [
            "title" => "Materi",
            "materi" => $materi,
            "mapel" => $mapel
        ];

        return view("siswa/materi/index", $data);
    }
}
