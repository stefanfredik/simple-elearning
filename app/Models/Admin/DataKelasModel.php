<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class DataKelasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'datakelas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_kelas', 'nama_kelas'];
}
