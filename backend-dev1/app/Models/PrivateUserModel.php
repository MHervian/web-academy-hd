<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateUserModel extends Model
{
	use HasFactory;
	protected $table = 'private_user';
	protected $primaryKey = 'userId';
	public $timestamps = false;

	protected $fillable = ['username', 'password', 'lvl'];
}
