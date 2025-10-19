<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajarModel extends Model
{
    use HasFactory;
    protected $table = 'pengajar';
    // protected $primaryKey = 'kelasId';
    public $timestamps = false;

    protected $fillable = [
        'userId',
        'nama_pengajar',
        'date_registration',
        'date_approval',
        'isApprove',
        'isActive',
    ];
}
