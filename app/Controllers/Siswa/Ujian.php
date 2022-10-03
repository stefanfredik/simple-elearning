<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\Admin\DataSiswaModel;
use App\Models\Guru\DataUjian;
use App\Models\Guru\UjianModel;
use CodeIgniter\I18n\Time;

class Ujian extends BaseController {
    public function __construct() {
        $this->ujianModel = new UjianModel();
        $this->siswaModel = new DataSiswaModel();
        $this->dataujian =  new DataUjian();
    }

    public function index() {

        $siswa = $this->siswaModel->find($this->session->get("id"));
        // dd($this->session->get("id"));

        // dd($siswa);

        $db      = \Config\Database::connect();
        $builder = $db->table('ujian');
        $builder->select("ujian.*");
        $builder->select("dataguru.nama as namaguru");
        $builder->select("datamapel.nama_mapel as mapel");
        $builder->select("dataruangankelas.nama_ruangan as kelas");
        $builder->join("dataruangankelas", "dataruangankelas.id = ujian.kelas", "left");
        $builder->join("dataguru", "dataguru.id = ujian.guru", "left");
        $builder->join("datamapel", "datamapel.id = ujian.mapel", "left");
        $builder->where("ujian.kelas", $siswa["ruangan"]);
        $builder->where("ujian.status", "Aktif");
        $query = $builder->get();
        $ujian = $query->getResultArray();

        $data = [
            "title" => "Ujian Siswa",
            "ujian" => $ujian
        ];

        return view("siswa/ujian/index", $data);
    }


    public function kerjaujian($id) {
        $siswa = $this->siswaModel->find($this->session->get("id"));

        $db      = \Config\Database::connect();
        $builder = $db->table('ujian');
        $builder->select("ujian.*");
        $builder->select("dataguru.nama as namaguru");
        $builder->select("datamapel.nama_mapel as mapel");
        $builder->select("dataruangankelas.nama_ruangan as kelas");
        $builder->join("dataruangankelas", "dataruangankelas.id = ujian.kelas", "left");
        $builder->join("dataguru", "dataguru.id = ujian.guru", "left");
        $builder->join("datamapel", "datamapel.id = ujian.mapel", "left");
        $builder->where("ujian.kelas", $siswa["ruangan"]);
        $builder->where("ujian.id", $id);


        $query = $builder->get();
        $ujian = $query->getResultArray();

        // dd($ujian);

        if ($this->dataujian->where("ujian", $id)->find()) {
            $status = true;
        } else {
            $status = false;
        }

        // dd($status);


        // dd($data["status"]);

        $data = [
            'title' => 'Ujian Siswa',
            'ujian' => $ujian,
            'selesai' => $status
        ];

        return view("siswa/ujian/kerjaujian", $data);
    }

    public function uploadujian($id) {
        $file = $this->request->getFile("fileujian");
        $data = $this->request->getPost();
        $data["fileujian"] = $file->getRandomName();
        $data["waktuupload"] = new Time('now');
        $data["siswa"]  = $this->session->get("id");
        $data["ujian"]   = $id;

        $file->move(WRITEPATH . 'uploads/ujian', $data["fileujian"]);


        $this->dataujian->save($data);

        $this->session->setFlashdata("pesan", [
            "judul" => "Ujian Siswa",
            "pesan" => "Hasil Ujian Berhasil Di Upload",
            "type"  => "success"
        ]);
        return redirect()->to("/siswa/ujian");
    }
}
