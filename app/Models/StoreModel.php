<?php

namespace App\Models;

use CodeIgniter\Model;

class StoreModel extends Model
{
    protected $table      = 'store';
    protected $primaryKey = 'id_store';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama_store', 'deskripsi_store', 'harga_store', 'id_vendor', 'gambar'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
