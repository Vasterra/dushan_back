<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
	public function index(Request $request)
	{
		return Order::withTrashed()
				->with(['status', 'travel' => fn ($t) => $t->with('pickUpLocation', 'dropOffLocation'), 'carType', 'transactions'])
				->get();
	}
}
