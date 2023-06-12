<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'no_hp', 'email', 'alamat', 'password', 'level_user'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
