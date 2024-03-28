<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderLocationStop extends Model
{
	use HasFactory, SoftDeletes;

	public $guarded = [];

	public function order()
	{
		return $this->belongsTo(Order::class, 'order_id', 'id');
	}

	public function locationStop()
	{
		return $this->belongsTo(LocationAddedStop::class, 'location_stop_id', 'id');
	}
}
