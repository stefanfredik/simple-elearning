<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class DataMapelModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'datamapel';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_mapel', 'nama_mapel', 'kkm'];
}
