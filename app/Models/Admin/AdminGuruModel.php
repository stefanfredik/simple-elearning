<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class AdminGuruModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'dataguru';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'email', 'jenis_kelamin', 'status', 'password'];
}
