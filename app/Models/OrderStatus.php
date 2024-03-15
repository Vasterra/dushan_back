<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
	use HasFactory;

	public $timestamps = false;

	public $guarded = [];

	public const CREATED = 1;

	public function orders()
	{
		return $this->hasMany(Order::class, 'order_id', 'id');
	}
}
