<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class InformasiModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'guruinformasi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['guru', 'kelas', 'judul', 'isi'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = false;
}
