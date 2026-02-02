<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramModel extends Model
{
	use HasFactory;
	protected $table = 'program';
	protected $primaryKey = 'programId';
	public $timestamps = false;

	protected $fillable = [
		'nama',
		'deskripsi',
		'kurikulumId',
		'file_jadwal',
		'date_created',
		'isOpen',
		'harga',
		'nama_kr',
		'deskripsi_kr',
		'file_jadwal_kr',
		'nama_en',
		'deskripsi_en',
		'file_jadwal_en'
	];

	protected $casts = [
		'isOpen' => 'boolean',
	];
}
