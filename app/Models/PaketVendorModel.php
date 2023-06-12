<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketVendorModel extends Model
{
    protected $table      = 'paketVendor';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama_paket', 'idr', 'area_pelayanan', 'kapasitas_orang', 'peiode_acara', 'desc_vendor', 'id_vendor', 'id_vendor'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
