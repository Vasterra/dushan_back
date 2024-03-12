<?php

namespace App\Services;

use App\Enum\TransactionStatusesEnum;
use App\Mail\OrderStoreMail;
use App\Models\Order;
use App\Models\Transaction;
use Stripe\Stripe;

class StripeService
{
	public string $domain = 'http://localhost:8080';

	public function __construct()
	{
		Stripe::setApiKey('sk_test_51MshW7Lrb7JLXGH5bh4D6Zf2eFpGaCq3QqDxZgniISM6t6lQMoftfsEUAeLaijMqbn8SU1JfAJIPiWISoLjhZrvx00hn1f6k49');
	}

	public function createSessionId(Order $order)
	{
		$cost = 2 * 100;
		$currency = 'EUR';
		$transaction_uuid = \Str::uuid();
		$order->transactions()->create([
				'status' => TransactionStatusesEnum::PAYMENT_INTENT_CREATED,
				'quantity' => 1,
				'expected_amount' => $cost,
				'currency' => $currency,
				'uuid' => $transaction_uuid,
		]);

		return \Stripe\Checkout\Session::create([
				'metadata' => [
						'transaction_uuid' => $transaction_uuid,
						'order_id' => $order->id,
				],
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
				'mode' => 'payment',
				'success_url' => $this->domain."/orders/$order->uuid",
				'cancel_url' => $this->domain.'/cancel.html',
		]);
	}

	public function updateStatusTransactions(array $data, string $status)
	{
		$metadata = $data['metadata'] ?? null;
		if ($metadata && isset($data['items'][0])) {
			$price = $data['items'][0]['price'];
			if ($transaction = Transaction::whereUuid($metadata['transaction_uuid'])->first()) {
				$data = [
						'status' => $status,
				];
				if ($status == TransactionStatusesEnum::PAYMENT_INTENT_SUCCEEDED) {
					$data['actual_amount'] = $price['unit_amount'];

					\Mail::to($transaction->order->email)
							->send(new OrderStoreMail($transaction->order));
				}

				$transaction->update($data);
			}
		}
	}
}
