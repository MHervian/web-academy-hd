<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarKelasModel extends Model
{
  use HasFactory;
  protected $table = 'pendaftar_kelas';
  protected $primaryKey = 'pendaftarId';
  public $timestamps = true;

  protected $fillable = [
    'kelasId',
    'memberId',
    'date_registration',
    'time_registration',
    'isApproved',
    'isPaid',
    'isPassed',
    'date_approval',
    'date_paid',
    'date_passed',
    'created_at',
    'updated_at'
  ];
}
