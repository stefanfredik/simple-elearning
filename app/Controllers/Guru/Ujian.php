<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\DataMapelModel;
use App\Models\Admin\DataRuangankelas as AdminDataRuangankelas;
use App\Models\Guru\DataUjian;
use App\Models\Guru\UjianModel;
use CodeIgniter\Files\File;
use DateTime;

class Ujian extends BaseController {
    public function __construct() {
        $this->file = new File("/uploads/ujian/fileujian/");
        $this->ujianModel = new UjianModel();
    }
    public function index() {
        $id = $this->session->get("id");

        $this->kelasModel = new AdminDataRuangankelas();
        $this->mapelModel = new DataMapelModel();
        $dataUjian = $this->ujianModel->where(["guru" => $id])->findAll();

        $data = [
            'title' => "Ujian",
            "ujian" => $this->ujianModel->where(["guru" => $id])->orderBy("status", "asc")->findAll(),
            "ruangan" => $this->kelasModel->findAll(),
            "mapel" => $this->mapelModel->findAll()
        ];

        foreach ($dataUjian as $dt) {
            if ($this->cekStatus($dt["bataswaktu"])) {
                $this->ujianModel->update($dt["id"], ["status" => "Tidak Aktif"]);
            }
        }

        return view("guru/ujian/index", $data);
    }


    public function tambah() {
        $data = $this->request->getPost();

        $file = $this->request->getFile("file");
        $data["file"] = $file->getRandomName();

        $file->move(WRITEPATH . 'uploads/ujian/fileujian', $data["file"]);

        $data["keterangan"]     = $data["keterangan"];
        $data["dibuat"]         = date("Y-m-d H:i", time());
        $data["bataswaktu"]     = $data["date"] . " " . $data["time"];
        $data["status"] = "Aktif";
        $data['kelas']  = $data["kelas"];
        $data["mapel"]  = $data["mapel"];
        $data["guru"]   = $this->session->get("id");

        $this->ujianModel->save($data);
        $data = [
            'judul'  => 'Ujian',
            'pesan' => 'Ujian baru telah ditambahkan!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('guru/ujian');
    }

    public function hapus($id) {
        $this->ujianModel->delete($id);

        $data = [
            'judul'  => 'ujian',
            'pesan' => 'ujian Berhasil Di Hapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);

        return redirect()->to('guru/ujian');
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
        $builder = $db->table("hasilujian");
        $builder->select("datasiswa.nama");
        $builder->select("hasilujian.*");
        $builder->join("datasiswa", "datasiswa.id = hasilujian.siswa", "left");
        $builder->where("hasilujian.ujian", $id);

        $query = $builder->get();
        $ujian = $query->getResultArray();

        // dd($ujian);

        $data = [
            "title" => "Detail Ujian",
            'ujian' => $ujian
        ];

        return view("guru/ujian/detail", $data);
    }

    public function nilai() {
        $dataujian = new DataUjian();

        $nilai = $this->request->getVar("nilai");
        $idujian = $this->request->getVar("idujian");
        $siswa = $this->request->getVar("siswa");

        // dd($data);

        $dataujian->where("id", $idujian)->set(["nilai" => $nilai])->update();

        $data = [
            'judul'  => 'Ujian',
            'pesan' => 'Nilai Berhasil Di Set!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
    }

    public function file($file) {
        return $this->response->download(WRITEPATH . "uploads/ujian/" . $file, null);
    }

    public function download($file) {
        return $this->response->download(WRITEPATH . "uploads/ujian/fileujian/" . $file, null);
    }
}
