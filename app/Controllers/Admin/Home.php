<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdminUserModel;
use App\Admin\Models\DataGuru\AdminGuruModel;
use App\Models\Admin\AdminGuruModel as AdminAdminGuruModel;
use App\Models\Admin\DataAdminModel;
use App\Models\Admin\DataInformasi;
use App\Models\Admin\DataRuangankelas;
use App\Models\Admin\DataSiswaModel;
use CodeIgniter\CodeIgniter;
use CodeIgniter\Model;
use Config\App;

class Home extends BaseController {
    public function __construct() {
        $this->siswa = new DataSiswaModel();
        $this->guru = new AdminAdminGuruModel();
        $this->admin = new DataAdminModel();
        $this->kelas = new DataRuangankelas();
        $this->info = new DataInformasi();
        // $this->jurusan =
    }


    public function index() {
        $data = [
            'title' => "Beranda",
            'jSiswa' => $this->siswa->countAll(),
            'jGuru' => $this->guru->countAll(),
            'jAdmin' => $this->admin->countAll(),
            'jKelas' => $this->kelas->countAll(),
            'jInformasi' => $this->info->countAll(),
        ];

        // dd($data);

        return view("admin/index", $data);
    }

    // public function profil()
    // {

    //     $data = [
    //         'title' => "Menu Profil"
    //     ];

    //     return view("admin/profil", $data);
    // }

    // public function guru()
    // {
    //     $adminGuruModel = new \App\Models\Admin\AdminGuruModel();

    //     $data = [
    //         'title' => "Data Guru",
    //         'dataGuru'  => $adminGuruModel->findAll()
    //     ];

    //     return view("admin/guru", $data);
    // }


    // public function user()
    // {

    //     $adminUserModel = new \App\Models\Admin\AdminUserModel();

    //     $data = [
    //         'title' => "Menu User",
    //         'dataUser'  => $adminUserModel->findAll()
    //     ];

    //     return view("admin/user", $data);
    // }
}
