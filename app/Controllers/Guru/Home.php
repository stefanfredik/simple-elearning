<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\Admin\DataInformasi;

class Home extends BaseController {
    public function index() {
        $informasi = new DataInformasi();

        $info = $informasi->whereIn("role", ["1", "3"])->findAll();

        $data = [
            'title' => 'Halaman Home',
            'info'  => $info
        ];

        // dd($data);
        return view("guru/beranda/index", $data);
    }
}
