<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\DataSiswaModel;
use App\Models\Guru\AbsensiModel;
use CodeIgniter\API\ResponseTrait;

class Absensi extends BaseController {
    use ResponseTrait;

    public function __construct() {
    }

    public function index() {
        $idGuru = $this->session->get("id");

        helper("Guru/Walikelas");
        helper("Guru/Kelas");

        $data = [
            'title' => "Data Absensi",
            'siswa' => getAllSiswaKelas(findKelasWali($idGuru)[0]['id']),
            'guru'  => $idGuru
        ];

        // dd($data);
        return view("guru/absensi/index", $data);
    }

    public function getabsensi($bulan) {
        $idGuru = $this->session->get("id");

        helper("Guru/Walikelas");
        helper("Guru/Kelas");

        $data = [
            'bulan' => $bulan,
            'title' => "Data Absensi",
            'siswa' => getAllSiswaKelas(findKelasWali($idGuru)[0]['id']),
            'guru'  => $idGuru
        ];

        return view('/guru/absensi/data', $data);
    }

    public function ubahabsen($id) {
        $siswaModel = new DataSiswaModel();

        $data = [
            'title'  => "Edit Data Absensi.",
            'siswa' => $siswaModel->find($id),
        ];


        return view("guru/absensi/edit", $data);
    }

    public function updateabsensi() {

        $data = $this->request->getVar();

        $id = $this->request->getVar('id');

        $data = [
            'siswa'  => $this->request->getVar('siswa'),
            'guruwali'  => $this->session->get("id"),
            'bulan'  => $this->request->getVar('bulan'),
            'tanggal'  => $this->request->getVar('tanggal'),
            'status'  => $this->request->getVar('status'),
        ];

        $absensiModel = new AbsensiModel();

        if ($id == 'null') {
            $absensiModel->save($data);
        } else {
            $absensiModel->update($id, $data);
        }

        return $this->respond(json_encode([
            'status' => 'sukses',
            'pesan'  => 'Absensi berhasil di Update.'
        ]));
    }
}
