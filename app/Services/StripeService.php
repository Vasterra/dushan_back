<?php

namespace App\Services;

use App\Enum\TransactionStatusesEnum;
use App\Jobs\OrderStoreMailJob;
use App\Models\Order;
use App\Models\Transaction;
use Stripe\Stripe;

class StripeService
{
	public string $domain = 'https://theluxurytransfers.com';

	public function __construct()
	{
		Stripe::setApiKey('sk_test_51MshW7Lrb7JLXGH5bh4D6Zf2eFpGaCq3QqDxZgniISM6t6lQMoftfsEUAeLaijMqbn8SU1JfAJIPiWISoLjhZrvx00hn1f6k49');
	}

	public function createSessionId(Order $order)
	{
		$cost = $order->cost * 100;
		$currency = 'EUR';
		$transaction_uuid = \Str::uuid();

		$session = \Stripe\Checkout\Session::create([
				'customer_email' => $order->email,
				'line_items' => [[
						'quantity' => 1,
						'price_data' => [
								'currency' => $currency,
								'unit_amount' => $cost,
								'product_data' => [
										'name' => 'Delivery',
								],
						],
				]],
				'metadata' => [
						'transaction_uuid' => $transaction_uuid,
						'order_id' => $order->id,
				],
				'mode' => 'payment',
				'success_url' => $this->domain."/orders/$order->uuid",
		]);

		$order->transactions()->create([
				'status' => TransactionStatusesEnum::PAYMENT_INTENT_CREATED,
				'quantity' => 1,
				'expected_amount' => $cost,
				'currency' => $currency,
				'uuid' => $transaction_uuid,
				'payment_intent' => $session?->payment_intent,
				'session_id' => $session?->id,
		]);

		return $session;
	}

	public function updateStatusTransactions(string $status, array $data)
	{
		if ($status === 'checkout.session.completed') {
			if ($transaction = Transaction::where('session_id', $data['id'])->first()) {
				$transaction->update([
						'payment_intent' => $data['payment_intent'],
						'actual_amount' => $transaction->expected_amount,
						'status' => TransactionStatusesEnum::PAYMENT_INTENT_SUCCEEDED,
				]);

				OrderStoreMailJob::dispatch($transaction->order);

				$transaction->order->update([
						'status_id' => 3,
				]);
			}
		}
	}
}
