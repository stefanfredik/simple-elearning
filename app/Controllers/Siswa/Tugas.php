<?php

namespace App\Controllers\Siswa;

use CodeIgniter\I18n\Time;
use App\Controllers\BaseController;
use App\Models\Admin\DataSiswaModel;
use App\Models\Guru\Datatugas;
use App\Models\Guru\TugasModel;

class Tugas extends BaseController {
    public function __construct() {
        $this->tugasModel = new TugasModel();
        $this->siswaModel = new DataSiswaModel();
        $this->dataTugas =  new Datatugas();
    }

    public function index() {

        $siswa = $this->siswaModel->find($this->session->get("id"));
        // dd($this->session->get("id"));

        // dd($siswa);

        $db      = \Config\Database::connect();
        $builder = $db->table('tugas');
        $builder->select("tugas.*");
        $builder->select("dataguru.nama as namaguru");
        $builder->select("datamapel.nama_mapel as mapel");
        $builder->select("dataruangankelas.nama_ruangan as kelas");
        $builder->join("dataruangankelas", "dataruangankelas.id = tugas.kelas", "left");
        $builder->join("dataguru", "dataguru.id = tugas.guru", "left");
        $builder->join("datamapel", "datamapel.id = tugas.mapel", "left");
        $builder->where("tugas.kelas", $siswa["ruangan"]);
        $builder->where("tugas.status", "Aktif");
        $query = $builder->get();
        $tugas = $query->getResultArray();

        $data = [
            "title" => "Tugas",
            "tugas" => $tugas
        ];

        return view("siswa/tugas/index", $data);
    }


    public function kerjatugas($id) {
        $siswa = $this->siswaModel->find($this->session->get("id"));

        $db      = \Config\Database::connect();
        $builder = $db->table('tugas');
        $builder->select("tugas.*");
        $builder->select("dataguru.nama as namaguru");
        $builder->select("datamapel.nama_mapel as mapel");
        $builder->select("dataruangankelas.nama_ruangan as kelas");
        $builder->join("dataruangankelas", "dataruangankelas.id = tugas.kelas", "left");
        $builder->join("dataguru", "dataguru.id = tugas.guru", "left");
        $builder->join("datamapel", "datamapel.id = tugas.mapel", "left");
        $builder->where("tugas.kelas", $siswa["ruangan"]);
        $builder->where("tugas.id", $id);


        $query = $builder->get();
        $tugas = $query->getResultArray();

        // dd($tugas);

        // dd($this->dataTugas->where("tugas", $id)->where("siswa", $this->session->get("id"))->find());

        if ($this->dataTugas->where("tugas", $id)->where("siswa", $this->session->get("id"))->find()) {
            $status = true;
        } else {
            $status = false;
        }

        // dd($status);


        // dd($data["status"]);

        $data = [
            'title' => 'Tugas',
            'tugas' => $tugas,
            'selesai' => $status
        ];

        return view("siswa/tugas/kerjatugas", $data);
    }

    public function uploadtugas($id) {
        $file = $this->request->getFile("filetugas");
        $data = $this->request->getPost();
        $data["filetugas"] = $file->getRandomName();
        $data["waktuupload"] = new Time('now');
        $data["siswa"]  = $this->session->get("id");
        $data["tugas"]   = $id;

        $file->move(WRITEPATH . 'uploads/tugas', $data["filetugas"]);


        $this->dataTugas->save($data);

        $this->session->setFlashdata("pesan", [
            "judul" => "Tugas",
            "pesan" => "Tugas Berhasil Di Upload",
            "type"  => "success"
        ]);
        return redirect()->to("/siswa/tugas");
    }
}
