<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class UjianModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'ujian';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["id", "keterangan", "dibuat", "bataswaktu", "status", "kelas", "mapel", "guru", "file"];
}
