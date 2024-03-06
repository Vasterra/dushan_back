<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use HasFactory, SoftDeletes;

	public $guarded = [];

	public $casts = [
			'is_pm' => 'boolean',
	];

	public function travel()
	{
		return $this->belongsTo(LocationTravel::class, 'location_travel_id', 'id');
	}

	public function carType()
	{
		return $this->belongsTo(CarType::class, 'car_type_id', 'id');
	}

	public function stops()
	{
		return $this->hasMany(OrderLocationStop::class, 'order_id', 'id');
	}
}
