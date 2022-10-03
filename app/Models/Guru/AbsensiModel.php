<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class AbsensiModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'absensi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["id", "siswa", "guruwali", "bulan", "tanggal", "status"];
}
