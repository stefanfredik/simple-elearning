<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\DataMapelModel;
use App\Models\Admin\DataRuangankelas;
use App\Models\Admin\DataSiswaModel;
use Dompdf\Dompdf;

class Raportsiswa extends BaseController {
    public function __construct() {
        $this->dataSiswa = new DataSiswaModel();
        // $this->pdf = new Dompdf();
    }


    public function index() {
        helper("Guru/Walikelas");
        helper("Guru/Kelas");

        $idguru = $this->session->get("id");
        $kelaswali = findKelasWali($idguru)[0]["id"];
        // dd($kelaswali);
        $siswakelas = getAllSiswaKelas($kelaswali);

        $data = [
            "title" => "Raport Nilai Siswa",
            "siswakelas"    => $siswakelas
        ];

        // dd($data);
        return view("guru/raportsiswa/index", $data);
    }


    public function detail($idsiswa) {
        helper("Guru/Kelas");
        helper("Guru/Walikelas");

        $siswa = $this->dataSiswa->find($idsiswa);

        $idguru = $this->session->get("id");
        $kelaswali = findKelasWali($idguru)[0]["id"];

        // $totalNilai = getTotalNilai($idsiswa,$kelaswali[0]["id"])

        $data = [
            "title" => "Data Raport Siswa " . $siswa["nama"],
            "siswa" => $siswa,
            "ruangan" => namaRuanganKelas($idsiswa),
            "mapel"    => getMapelAllKelas($kelaswali)
        ];

        // dd($data);

        return view("guru/raportsiswa/detail", $data);
    }

    public function cetak() {
        $dompdf = new Dompdf();
    }
}
