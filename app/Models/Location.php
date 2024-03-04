<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
	use HasFactory, SoftDeletes;

	public $guarded = [];

	public function pickupTravels()
	{
		return $this->hasMany(LocationTravel::class, 'pickup_location_id');
	}

	public function dropOffTravels()
	{
		return $this->hasMany(LocationTravel::class, 'drop_off_location_id');
	}
}
