<?php

namespace App\Models;

use CodeIgniter\Model;

class ManagerModel extends Model
{
    protected $table      = 'manager';
    protected $primaryKey = 'id_manager';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama_manager', 'username_manager', 'alamat_manager', 'no_hp_manager', 'email_manager', 'password_manager'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
