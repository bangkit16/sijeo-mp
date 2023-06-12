<?php

namespace App\Models;

use CodeIgniter\Model;

class VendorModel extends Model
{
    protected $table      = 'vendor';
    protected $primaryKey = 'id_vendor';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama_vendor', 'deskripsi_vendor', 'alamat_vendor', 'no_hp_vendor', 'email_vendor', 'kota', 'instagram', 'rating'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
