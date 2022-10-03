<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\Admin\DataSiswaModel;
use Config\Database;

class Profil extends BaseController {
    public function __construct() {
        $this->dataSiswa = new DataSiswaModel();
    }

    public function index() {
        $id = $this->session->get("id");

        $db =  \Config\Database::connect();
        $builder = $db->table("datasiswa");
        $builder->select("*");
        $builder->join("dataruangankelas", "dataruangankelas.id = datasiswa.ruangan");
        $builder->where("datasiswa.id", $id);

        $profile =   $builder->get()->getFirstRow('array');

        // dd($siswa);

        $data = [
            'title' => 'Halaman Profile',
            'profile' => $profile
        ];

        return view("siswa/profil/index", $data);
    }
}
