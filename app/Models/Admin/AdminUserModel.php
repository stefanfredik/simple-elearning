<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class AdminUserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['username', 'nama', 'email', 'password', 'role'];
}
