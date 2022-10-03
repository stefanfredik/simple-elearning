<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class DataJurusanlModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'datajurusan';
    protected $primaryKey       = 'id_jurusan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_jurusan', 'nama_jurusan'];
}
