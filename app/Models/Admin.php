<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class Admin extends User
{
	use HasFactory;

	protected $table = 'users';

	public function getTokenAttribute()
	{
		return JWTAuth::fromUser($this);
	}
}
