<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table      = 'customer';
    protected $primaryKey = 'id_customer';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama_customer', 'jenis_kelamin_customer', 'tempat_lahir_customer', 'tanggal_lahir_customer', 'no_hp_customer', 'email_customer', 'alamat_customer', 'password_customer'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
