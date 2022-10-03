<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Database\Migrations\DataRuangankelas;
use App\Models\Admin\DataMapelModel;
use App\Models\Admin\DataRuangankelas as AdminDataRuangankelas;
use App\Models\Guru\Datatugas;
use App\Models\Guru\TugasModel;
use CodeIgniter\Files\File;
use DateTime;

class Tugas extends BaseController {
    public function __construct() {
        $this->file = new File("/uploads/tugas/filetugas/");
        $this->tugasModel = new TugasModel();
    }
    public function index() {
        $id = $this->session->get("id");
        $this->kelasModel = new AdminDataRuangankelas();
        $this->mapelModel = new DataMapelModel();
        $dataTugas = $this->tugasModel->where(["guru" => $id])->findAll();

        $data = [
            'title' => "Tugas",
            "tugas" => $this->tugasModel->where(["guru" => $id])->orderBy("status", "asc")->findAll(),
            "ruangan" => $this->kelasModel->findAll(),
            "mapel" => $this->mapelModel->findAll()
        ];


        foreach ($dataTugas as $dt) {
            if ($this->cekStatus($dt["bataswaktu"])) {
                $this->tugasModel->update($dt["id"], ["status" => "Tidak Aktif"]);
            }
        }



        return view("guru/tugas/index", $data);
    }


    public function tambah() {
        $data = $this->request->getPost();

        $file = $this->request->getFile("file");
        $data["file"] = $file->getRandomName();

        $file->move(WRITEPATH . 'uploads/tugas/filetugas', $data["file"]);


        $data["keterangan"] = $data["keterangan"];
        $data["dibuat"] = date("Y-m-d H:i", time());
        $data["bataswaktu"] = $data["date"] . " " . $data["time"];
        $data["status"] = "Aktif";
        $data['kelas']  = $data["kelas"];
        $data["mapel"]  = $data["mapel"];
        $data["guru"]   = $this->session->get("id");
        $this->tugasModel->save($data);

        $data = [
            'judul'  => 'Tugas',
            'pesan' => 'Tugas baru telah ditambahkan!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('guru/tugas');
    }

    public function hapus($id) {
        $this->tugasModel->delete($id);

        $data = [
            'judul'  => 'Tugas',
            'pesan' => 'Tugas Berhasil Di Hapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('guru/tugas');
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
        $builder = $db->table("hasiltugas");
        $builder->select("datasiswa.nama");
        $builder->select("hasiltugas.*");
        $builder->join("datasiswa", "datasiswa.id = hasiltugas.siswa", "left");
        $builder->where("hasiltugas.tugas", $id);

        $query = $builder->get();
        $tugas = $query->getResultArray();

        // dd($tugas);

        $data = [
            "title" => "Detail Tugas",
            'tugas' => $tugas
        ];

        return view("guru/tugas/detail", $data);
    }

    public function nilai() {
        $dataTugas = new Datatugas();

        $nilai = $this->request->getVar("nilai");
        $idtugas = $this->request->getVar("idtugas");
        $siswa = $this->request->getVar("siswa");

        // dd($data);

        $dataTugas->where("id", $idtugas)->set(["nilai" => $nilai])->update();

        $data = [
            'judul'  => 'Tugas',
            'pesan' => 'Nilai Berhasil Di Set!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
    }

    public function download($file) {
        return $this->response->download(WRITEPATH . "uploads/tugas/filetugas/" . $file, null);
    }

    // public function file

}
