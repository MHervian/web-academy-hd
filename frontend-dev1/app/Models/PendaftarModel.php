<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{
    protected $table            = 'pendaftar_kelas';
    protected $primaryKey       = 'pendaftarId';
    protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = [
        'kelasId',
        'memberId',
        'isApproved',
        'date_registration',
        'time_registration',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
