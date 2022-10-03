<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\DataJadwalModel;
use App\Models\Admin\DataKelasModel;
use App\Models\Admin\DataRuangankelas;
use App\Models\Admin\DataSiswaModel;

class Kelas extends BaseController {
    public $id;

    public function __construct() {
        $this->jadwalModel = new DataJadwalModel();
        $this->dataSiswa = new DataSiswaModel();
        $this->dataKelas = new DataRuangankelas();
        helper("Guru/Kelas");
    }


    public function index() {
        $this->id = $this->session->get("id");
        $kelas = findKelasAjar($this->id);

        $data = [
            "title" => "Data Kelas",
            "kelas"    => $kelas
        ];

        return view("guru/kelas/index", $data);
    }

    public function detail($kls) {
        $this->id = $this->session->get("id");
        $mapel = findMapelAjar($this->id, $kls);

        $kelas = $this->dataKelas->find($kls);

        // dd($kelas);

        $data = [
            "kelas" => $kelas,
            'mapel' => $mapel,
            'title' => "Data Kelas " . $kelas["nama_ruangan"],
            'siswa' => $this->dataSiswa->where("ruangan", $kls)->findAll()
        ];

        return view("guru/kelas/detail", $data);
    }
}
