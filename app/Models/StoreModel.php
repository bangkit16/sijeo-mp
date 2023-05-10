<?php

namespace App\Models;

use CodeIgniter\Model;

class StoreModel extends Model
{
    protected $table      = 'store';
    protected $primaryKey = 'id_store';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama_store', 'deskripsi_store', 'alamat_store', 'no_hp_store', 'email_store', 'harga_store'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
