<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\AdminGuruModel;

class Walikelas extends BaseController {
    public function __construct() {
        $this->dataGuru = new AdminGuruModel();
    }

    public function index() {
        $id = $this->session->get("id");
        helper("Guru/Kelas");
        helper("Guru/Walikelas");

        $kelaswali = findKelasWali($id);
        $allmapel = getMapelAllKelas($kelaswali[0]["id"]);

        $data = [
            'profil'    => $this->dataGuru->find($id),
            "title"     => "Data Wali Kelas " . $kelaswali[0]["nama_ruangan"],
            "kelaswali"     => $kelaswali,
            "allmapel"      => $allmapel
        ];

        return view("guru/walikelas/index", $data);
    }


    public function detail($idmapel) {
        $id = $this->session->get("id");
        helper("Guru/Walikelas");
        helper("Guru/Kelas");
        $kelaswali = findKelasWali($id);
        $datasiswa = getAllSiswaKelas($kelaswali[0]["id"]);

        $data = [
            "mapel" => $idmapel,
            "title" => "Detail",
            "kelaswali" => $kelaswali,
            "datasiswa" => $datasiswa,
        ];

        return view("guru/walikelas/detail", $data);
    }

    public function setkkm() {
        $data = [
            "title" => "Set KKM Mata Pelajaran",

        ];


        return view("guru/walikelas/setkkm", $data);
    }
}
