<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationAddedStop extends Model
{
	use HasFactory, SoftDeletes;

	public $guarded = [];

	public $appends = ['coords'];

	public function locationTravel()
	{
		return $this->belongsTo(LocationTravel::class, 'location_travel_id', 'id');
	}

	public function getCoordsAttribute()
	{
		return [$this->lng, $this->lat];
	}
}
