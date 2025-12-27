<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // Nama tabel di database
    protected $table            = 'users';

    // Primary key tabel
    protected $primaryKey       = 'id';

    // Harus diisi agar CI bisa menyimpan data ke kolom-kolom ini
    protected $allowedFields    = [
        'name',
        'email',
        'password',
        // 'google_id',
        // 'avatar'
    ];

    // Mengaktifkan fitur otomatis created_at dan updated_at
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}
