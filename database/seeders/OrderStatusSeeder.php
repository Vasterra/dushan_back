<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		OrderStatus::create([
						'name' => 'Created',
		]);
		OrderStatus::create([
						'name' => 'Awaiting payment',
		]);
		OrderStatus::create([
						'name' => 'Paid',
		]);
		OrderStatus::create([
						'name' => 'Canceled',
		]);
	}
}
