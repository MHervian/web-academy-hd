<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiKelasModel extends Model
{
	use HasFactory;
	protected $table = 'registrasi_kelas';
	// protected $primaryKey = 'kelasId';
	public $timestamps = false;

	protected $fillable = [
		'kelasId',
		'memberId',
		'date_registration',
		'time_registration',
		'isApprove',
		'date_approval'
	];
}
