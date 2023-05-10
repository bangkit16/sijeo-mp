<?php

namespace App\Models;

use CodeIgniter\Model;

class EoModel extends Model
{
    protected $table      = 'event_organizer';
    protected $primaryKey = 'id_eo';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama_eo', 'tanggal_lahir_eo', 'email_eo', 'alamat_eo', 'kontak_eo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
