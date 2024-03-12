<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	use HasFactory;

	public $guarded = [];

	public function order()
	{
		return $this->belongsTo(Order::class, 'order_id', 'id');
	}
}
