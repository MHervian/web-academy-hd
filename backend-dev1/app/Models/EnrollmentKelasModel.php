<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentKelasModel extends Model
{
	use HasFactory;
	protected $table = 'enrollment_kelas';
	// protected $primaryKey = 'kelasId';
	public $timestamps = false;

	protected $fillable = [
		'kelasId',
		'memberId',
		'isPass',
		'date_pass',
	];
}
