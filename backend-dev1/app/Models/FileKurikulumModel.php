<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileKurikulumModel extends Model
{
	use HasFactory;
	protected $table = 'file_kurikulum';
	// protected $primaryKey = 'kurikulumId';
	public $timestamps = false;

	protected $fillable = [
		'kurikulumId',
		'seqno',
		'filename',
	];
}
