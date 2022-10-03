<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\DataMapelModel;
use App\Models\Admin\DataRuangankelas;
use App\Models\Guru\MateriModel;
use App\Models\Guru\QuizModel;
use CodeIgniter\Files\File;
use CodeIgniter\Files\FileCollection;
use CodeIgniter\I18n\Time;

class Materi extends BaseController {
    public function __construct() {
        helper("form");
        $this->materiModel = new MateriModel();
        $this->file = new File("/uploads/materi/");
        $this->mapelModel = new DataMapelModel();
    }

    public function index() {
        $this->ruanganModel = new DataRuangankelas();

        $db      = \Config\Database::connect();
        $builder = $db->table('materi');
        $builder->select("materi.*");
        $builder->select("datamapel.*");
        $builder->select("materi.id AS idmateri");
        $builder->select("dataruangankelas.*");
        $builder->join("dataruangankelas", "dataruangankelas.id = materi.kelas");
        $builder->join("datamapel", "datamapel.id = materi.mapel");
        $builder->where("materi.guru", $this->session->get("id"));
        $builder->orderBy("materi.kelas");

        $query = $builder->get();
        $materi = $query->getResultArray();

        // dd($materi);

        $data = [
            "title" => "Materi",
            "kelas" => $this->ruanganModel->findAll(),
            "materi" => $materi,
            "mapel" => $this->mapelModel->findAll()
        ];

        // dd($data);




        return view("guru/materi/index", $data);
    }

    public function tambah() {
        $file = $this->request->getFile("file");

        $data = $this->request->getPost();
        $data["guru"] = $this->session->get("id");
        $data["file"] = $file->getRandomName();
        $data["waktu"] = new Time('now');

        $file->move(WRITEPATH . 'uploads/materi', $data["file"]);

        $this->materiModel->save($data);


        $data = [
            'judul'  => 'Materi',
            'pesan' => 'Materi berhasil ditambah!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
        return redirect()->to('/guru/materi/');
    }


    public function download($file) {
        return $this->response->download(WRITEPATH . "uploads/materi/" . $file, null);
    }


    public function hapus($id) {
        $file = $this->materiModel->find($id);
        $file = $file["file"];

        $this->materiModel->delete($id);
        unlink(WRITEPATH . "uploads/materi/" . $file);

        $data = [
            'judul'  => 'Materi',
            'pesan' => 'Materi Berhasil Di Hapus!',
            'type'  => 'success'
        ];

        // $files = new File(WRITEPATH . "uploads/materi/" . $file);
        // $files->remove();

        $this->session->setFlashdata('pesan', $data);
        return redirect()->to('guru/materi');
    }
}
