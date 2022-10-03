<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Database\Migrations\DataMapel;
use App\Models\Admin\DataMapelModel;
use App\Models\Guru\DataQuiz;
use App\Models\Guru\Datatugas;
use App\Models\Guru\DataUjian;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Nilai extends BaseController {
    use ResponseTrait;

    public function __construct() {
        $this->dataTugas = new Datatugas();
        $this->dataQuiz = new DataQuiz();
        $this->dataUjian = new DataUjian();
        $this->dataMapel = new DataMapelModel();
    }

    public function index() {

        $data = [
            "title" => "Nilai Siswa",
            "mapel" => $this->dataMapel->findAll()
        ];

        return view("siswa/nilai/index", $data);
    }


    public function tampilnilai() {

        $mapel =  $this->request->getVar("mapel");

        // dd($mapel);

        $db      = \Config\Database::connect();
        $builder = $db->table('tugas');
        $builder->select("tugas.*");
        $builder->select("hasiltugas.nilai");
        $builder->select("datamapel.nama_mapel");

        $builder->join("hasiltugas", "hasiltugas.tugas = tugas.id", "left");
        $builder->join("datamapel", "datamapel.id = tugas.mapel", "left");
        $builder->where("tugas.mapel", $mapel);
        $builder->where("hasiltugas.siswa", $this->session->get("id"));

        $query = $builder->get();
        $tugas = $query->getResultArray();

        $data["tugas"] = $tugas;



        $db1      = \Config\Database::connect();
        $builder1 = $db1->table('quiz');
        $builder1->select("quiz.*");
        $builder1->select("hasilquiz.nilai");
        $builder1->select("datamapel.nama_mapel");
        $builder1->join("hasilquiz", "hasilquiz.quiz = quiz.id");
        $builder1->join("datamapel", "datamapel.id = quiz.mapel");
        $builder1->where("hasilquiz.siswa", $this->session->get("id"));
        $builder1->where("quiz.mapel", $mapel);
        $query = $builder1->get();
        $quiz = $query->getResultArray();

        $data["quiz"] = $quiz;

        $db2      = \Config\Database::connect();
        $builder2 = $db2->table('ujian');
        $builder2->select("ujian.*");
        $builder2->select("hasilujian.nilai");
        $builder2->select("datamapel.nama_mapel");
        $builder2->join("hasilujian", "hasilujian.ujian = ujian.id");
        $builder2->join("datamapel", "datamapel.id = ujian.mapel");
        $builder2->where("ujian.mapel", $mapel);
        $builder2->where("hasilujian.siswa", $this->session->get("id"));

        $query = $builder2->get();
        $ujian = $query->getResultArray();

        $data["ujian"] = $ujian;
        $data["title"] = "Data Nilai";
        $data["mapel"] = $this->dataMapel->findAll();

        return view("siswa/nilai/tampil", $data);
    }
}
