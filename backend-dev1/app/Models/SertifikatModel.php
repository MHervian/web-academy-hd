<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatModel extends Model
{
	use HasFactory;
	protected $table = 'sertifikat';
	protected $primaryKey = 'memberId';
	public $timestamps = false;

	protected $fillable = [
		'memberId',
		'noSertifikat',
		'date_issued',
		'filename',
	];
}
