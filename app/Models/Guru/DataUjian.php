<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class DataUjian extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'hasilujian';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["siswa", "guru", "ujian", "waktuupload", "fileujian", "keterangan", "nilai"];
}
