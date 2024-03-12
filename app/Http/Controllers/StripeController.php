<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\StripeService;
use Illuminate\Http\Request;

class StripeController extends Controller
{
	public function createSessionId(Order $order)
	{
		return (new StripeService())->createSessionId($order);
	}

	public function webhookHandler(Request $request)
	{
		$service = (new StripeService());

		$service->updateStatusTransactions($request['type'], $request['data']['object']);

		return response([], 200);
	}
}
