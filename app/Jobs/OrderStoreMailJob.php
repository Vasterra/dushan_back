<?php

namespace App\Jobs;

use App\Mail\OrderStoreMail;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OrderStoreMailJob implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	/**
	 * Create a new job instance.
	 */
	public function __construct(public Order $order)
	{
		\Mail::to($this->order->email)
				->send(new OrderStoreMail($this->order));
	}

	/**
	 * Execute the job.
	 */
	public function handle(): void
	{
		//
	}
}
