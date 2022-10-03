<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController {
    public function index() {
        $data = [
            "title" => "Halaman Home"
        ];


        return view("home/index", $data);
    }
}
