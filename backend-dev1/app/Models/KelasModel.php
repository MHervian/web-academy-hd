<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
	use HasFactory;
	protected $table = 'kelas';
	protected $primaryKey = 'kelasId';
	public $timestamps = false;

	protected $fillable = [
		'nama_kelas',
		'nama_program',
		'deskripsi',
		'kapasitas',
		'date_open',
		'date_close',
		'time_close',
		'pengajar',
	];
}
