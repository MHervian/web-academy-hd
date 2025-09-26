<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumModel extends Model
{
    use HasFactory;
    protected $table = 'kurikulum';
    protected $primaryKey = 'kurikulumId';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'deskripsi',
        // 'programId',
        'date_input',
        'isApprove',
        'date_approve',
    ];
}
