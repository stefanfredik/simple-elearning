<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class DataQuiz extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'hasilquiz';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["siswa", "guru", "quiz", "waktuupload", "filequiz", "keterangan", "nilai"];
}
