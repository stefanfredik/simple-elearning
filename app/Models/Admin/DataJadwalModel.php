<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class DataJadwalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'datajadwal';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['hari', 'jam', 'kelas', 'mapel', 'guru'];
}
