<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class MateriModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'materi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["id", "kelas", "guru", "mapel", "keterangan", "file", "waktu"];
}
