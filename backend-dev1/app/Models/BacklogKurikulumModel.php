<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacklogKurikulumModel extends Model
{
	use HasFactory;
	protected $table = 'backlog_kurikulum';
	// protected $primaryKey = 'kelasId';
	public $timestamps = false;

	protected $fillable = [
		'kurikulumId',
		'seqno',
		'deskripsi',
		'date_backlog',
	];
}
