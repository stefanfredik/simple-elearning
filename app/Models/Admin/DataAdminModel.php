<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class DataAdminModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dataadmin';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'email', 'jenis_kelamin', 'password'];
}
