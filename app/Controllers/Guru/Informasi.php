<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\DataRuangankelas;
use App\Models\Guru\InformasiModel;

class Informasi extends BaseController {

    public function __construct() {
        $this->dataInformasi = new InformasiModel();
        $this->dataKelas     = new DataRuangankelas();
    }


    public function index() {
        $id = $this->session->get("id");

        $db =  \Config\Database::connect();

        $builder = $db->table("guruinformasi");
        $builder->select("guruinformasi.*");
        $builder->select("dataguru.nama");
        $builder->select("dataruangankelas.nama_ruangan");

        $builder->join("dataguru", "guruinformasi.guru = dataguru.id", 'left');
        $builder->join("dataruangankelas", "dataruangankelas.id = guruinformasi.kelas");
        $builder->where("guruinformasi.guru", $id);

        $informasi =   $builder->get()->getResultArray();

        // dd($informasi);



        $data = [
            'title'     => "Data Informasi Siswa",
            'informasi' => $informasi,
            'kelas'     => $this->dataKelas->findAll(),
        ];


        // dd($data);




        return view('guru/informasi/index', $data);
    }


    public function tambah() {

        $data =  $this->request->getPost();
        $data['guru'] = $this->session->get('id');


        $this->dataInformasi->insert($data);


        $pesan = [
            'judul'  => 'Informasi',
            'pesan' => 'Informasi Berhasil  ditambah.',
            'type'  => 'success'
        ];
        $this->session->setFlashdata('pesan', $pesan);

        return redirect()->to("/guru/informasi");
    }


    public function edit() {
    }

    public function hapus($id) {
        $this->dataInformasi->delete($id);

        $data = [
            'judul'  => 'Data Informasi',
            'pesan' => 'Informasi berhasil dihapus!',
            'type'  => 'success'
        ];

        $this->session->setFlashdata('pesan', $data);
        return redirect()->to('/guru/informasi');
    }
}
