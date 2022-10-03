<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\DataMapelModel;
use App\Models\Admin\DataRuangankelas as AdminDataRuangankelas;
use App\Models\Guru\DataQuiz;
use App\Models\Guru\QuizModel;
use CodeIgniter\Files\File;
use DateTime;

class Quiz extends BaseController {
    public function __construct() {
        $this->file = new File("/uploads/ujian/filequiz/");
        $this->quizModel = new QuizModel();
        // $this->id = $this->session->get("id");
    }
    public function index() {
        $id = $this->session->get("id");

        $this->kelasModel = new AdminDataRuangankelas();
        $this->mapelModel = new DataMapelModel();

        $dataquiz = $this->quizModel->where(["guru" => $id])->findAll();

        $data = [
            'title' => "Quiz",
            "quiz" => $this->quizModel->orderBy("status", "asc")->where("guru", $id)->findAll(),
            "ruangan" => $this->kelasModel->findAll(),
            "mapel" => $this->mapelModel->findAll()
        ];


        foreach ($dataquiz as $dt) {
            if ($this->cekStatus($dt["bataswaktu"])) {
                $this->quizModel->update($dt["id"], ["status" => "Tidak Aktif"]);
            }
        }



        return view("guru/quiz/index", $data);
    }


    public function tambah() {
        $data = $this->request->getPost();

        $file = $this->request->getFile("file");
        $data["file"] = $file->getRandomName();

        $file->move(WRITEPATH . 'uploads/quiz/filequiz', $data["file"]);

        $data["keterangan"] = $data["keterangan"];
        $data["dibuat"] = date("Y-m-d H:i", time());
        $data["bataswaktu"] = $data["date"] . " " . $data["time"];
        $data["status"] = "Aktif";
        $data['kelas']  = $data["kelas"];
        $data["mapel"]  = $data["mapel"];
        $data["guru"]   = $this->session->get("id");
        $this->quizModel->save($data);

        $data = [
            'judul'  => 'Quiz',
            'pesan' => 'Quiz baru telah ditambahkan!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('guru/quiz');
    }

    public function hapus($id) {
        $this->quizModel->delete($id);

        $data = [
            'judul'  => 'quiz',
            'pesan' => 'quiz Berhasil Di Hapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('guru/quiz');
    }

    private function cekStatus($waktu) {
        date_default_timezone_set('Asia/Makassar');
        $date = new DateTime($waktu);
        $batasWaktu = $date->getTimestamp();
        $waktuSekarang = time();

        if ($waktuSekarang > $batasWaktu) {
            return true;
        } else {
            return false;
        }
    }


    public function detail($id) {

        $db = \Config\Database::connect();
        $builder = $db->table("hasilquiz");
        $builder->select("datasiswa.nama");
        $builder->select("hasilquiz.*");
        $builder->join("datasiswa", "datasiswa.id = hasilquiz.siswa", "left");
        $builder->where("hasilquiz.quiz", $id);

        $query = $builder->get();
        $quiz = $query->getResultArray();

        // dd($quiz);

        $data = [
            "title" => "Data Quiz",
            'quiz' => $quiz
        ];

        return view("guru/quiz/detail", $data);
    }

    public function nilai() {
        $dataquiz = new DataQuiz();

        $nilai = $this->request->getVar("nilai");
        $idquiz = $this->request->getVar("idquiz");
        $siswa = $this->request->getVar("siswa");

        // dd($data);

        $dataquiz->where("id", $idquiz)->set(["nilai" => $nilai])->update();

        $data = [
            'judul'  => 'Quiz',
            'pesan' => 'Nilai Berhasil Di Set!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
    }

    public function file($file) {
        return $this->response->download(WRITEPATH . "uploads/quiz/" . $file, null);
    }


    public function download($file) {
        return $this->response->download(WRITEPATH . "uploads/quiz/filequiz/" . $file, null);
    }
}
