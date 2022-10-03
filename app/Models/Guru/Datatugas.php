<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class Datatugas extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'hasiltugas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["siswa", "guru", "tugas", "waktuupload", "filetugas", "keterangan", "nilai"];
}
