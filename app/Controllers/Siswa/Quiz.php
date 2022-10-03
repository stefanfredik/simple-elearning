<?php

namespace App\Controllers\Siswa;

use CodeIgniter\I18n\Time;
use App\Controllers\BaseController;
use App\Models\Admin\DataSiswaModel;
use App\Models\Guru\DataQuiz;
use App\Models\Guru\QuizModel;

class Quiz extends BaseController {
    public function __construct() {
        $this->quizModel = new QuizModel();
        $this->siswaModel = new DataSiswaModel();
        $this->dataquiz =  new DataQuiz();
    }

    public function index() {

        $siswa = $this->siswaModel->find($this->session->get("id"));
        // dd($this->session->get("id"));

        // dd($siswa);

        $db      = \Config\Database::connect();
        $builder = $db->table('quiz');
        $builder->select("quiz.*");
        $builder->select("dataguru.nama as namaguru");
        $builder->select("datamapel.nama_mapel as mapel");
        $builder->select("dataruangankelas.nama_ruangan as kelas");
        $builder->join("dataruangankelas", "dataruangankelas.id = quiz.kelas", "left");
        $builder->join("dataguru", "dataguru.id = quiz.guru", "left");
        $builder->join("datamapel", "datamapel.id = quiz.mapel", "left");
        $builder->where("quiz.kelas", $siswa["ruangan"]);
        $builder->where("quiz.status", "Aktif");
        $query = $builder->get();
        $quiz = $query->getResultArray();

        $data = [
            "title" => "Quiz",
            "quiz" => $quiz
        ];

        return view("siswa/quiz/index", $data);
    }


    public function kerjaquiz($id) {
        $siswa = $this->siswaModel->find($this->session->get("id"));

        $db      = \Config\Database::connect();
        $builder = $db->table('quiz');
        $builder->select("quiz.*");
        $builder->select("dataguru.nama as namaguru");
        $builder->select("datamapel.nama_mapel as mapel");
        $builder->select("dataruangankelas.nama_ruangan as kelas");
        $builder->join("dataruangankelas", "dataruangankelas.id = quiz.kelas", "left");
        $builder->join("dataguru", "dataguru.id = quiz.guru", "left");
        $builder->join("datamapel", "datamapel.id = quiz.mapel", "left");
        $builder->where("quiz.kelas", $siswa["ruangan"]);
        $builder->where("quiz.id", $id);


        $query = $builder->get();
        $quiz = $query->getResultArray();

        // dd($quiz);

        if ($this->dataquiz->where("quiz", $id)->find()) {
            $status = true;
        } else {
            $status = false;
        }

        // dd($status);


        // dd($data["status"]);

        $data = [
            'title' => 'Quiz Siswa',
            'quiz' => $quiz,
            'selesai' => $status
        ];

        return view("siswa/quiz/kerjaquiz", $data);
    }

    public function uploadquiz($id) {
        $file = $this->request->getFile("filequiz");
        $data = $this->request->getPost();
        $data["filequiz"] = $file->getRandomName();
        $data["waktuupload"] = new Time('now');
        $data["siswa"]  = $this->session->get("id");
        $data["quiz"]   = $id;

        $file->move(WRITEPATH . 'uploads/quiz', $data["filequiz"]);


        $this->dataquiz->save($data);

        $this->session->setFlashdata("pesan", [
            "judul" => "Quiz Siswa",
            "pesan" => "Quiz Berhasil Di Upload",
            "type"  => "success"
        ]);
        return redirect()->to("/siswa/quiz");
    }
}
