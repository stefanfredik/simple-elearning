<?php

namespace App\Models\Siswa;

use CodeIgniter\Model;

class NilaiSiswa extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'nilaisiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [""];
}
