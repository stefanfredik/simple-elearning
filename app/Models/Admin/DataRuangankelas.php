<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class DataRuangankelas extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dataruangankelas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_ruangan', 'nama_ruangan', 'kelas', 'jurusan'];
}
