<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $primaryKey = 'memberId';
    public $timestamps = false;

    protected $fillable = ['username', 'email', 'date_registration', 'password'];
}
