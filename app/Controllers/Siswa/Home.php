<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\Admin\DataInformasi;
use App\Models\Admin\DataSiswaModel;

class Home extends BaseController {
    public function __construct() {
        $this->dataSiswa =  new DataSiswaModel();
        $this->dataInformasi = new DataInformasi();
    }

    public function index() {


        $info = $this->dataInformasi->whereIn("role", ["2", "3"])->findAll();
        $ruangan =  $this->dataSiswa->select("ruangan")->find($this->session->get('id'));

        // dd($ruangan);

        // Info Guru
        $db =  \Config\Database::connect();
        $builder = $db->table("guruinformasi");
        $builder->select("guruinformasi.*");
        $builder->select("dataguru.nama");
        $builder->select("dataruangankelas.nama_ruangan");
        $builder->join("dataguru", "guruinformasi.guru = dataguru.id");
        $builder->join("dataruangankelas", "guruinformasi.kelas = dataruangankelas.id");
        $builder->where("dataruangankelas.id", $ruangan);
        $infoguru =   $builder->get()->getResultArray();
        // ---------------------------------------------------------------


        // dd($infoguru);

        // 

        $data = [
            'title' => 'Halaman Home',
            'info'  => $info,
            'infoguru' => $infoguru
        ];

        // dd($data);
        return view("siswa/beranda/index", $data);
    }
}
