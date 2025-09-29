<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationModel extends Model
{
    use HasFactory;
    protected $table = 'notifikasi';
	protected $primaryKey = 'noteId';
	public $timestamps = false;

	protected $fillable = [
		'judul',
		'deskripsi',
		'date_post',
		'date_created',
		'userId',
	];
}
