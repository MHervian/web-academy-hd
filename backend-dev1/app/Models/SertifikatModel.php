<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatModel extends Model
{
	use HasFactory;
	protected $table = 'sertifikat';
	// protected $primaryKey = 'memberId';
	protected $primaryKey = 'sertifikatId';
	public $timestamps = true;

	protected $fillable = [
		'memberId',
		'kelasId',
		'noSertifikat',
		'date_issued',
		'filename'
	];
}
