<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class NilaiModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'nilai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["id", "siswa", "guru", "kelas", "mapel", "kategory"];
}
