<?php

namespace Database\Seeders;

use App\Models\LocationTravel;
use Illuminate\Database\Seeder;

class LocationTravelSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		LocationTravel::create([
				'pickup_location_id' => 1,
				'drop_off_location_id' => 2,
				'uuid' => '7282e515-851a-42d9-9f2d-993560e8213f',
		]);
		LocationTravel::create([
				'pickup_location_id' => 1,
				'drop_off_location_id' => 3,
				'uuid' => 'bc1c3b1c-465a-43d2-97df-41bb498a9be3',
		]);
		LocationTravel::create([
				'pickup_location_id' => 1,
				'drop_off_location_id' => 4,
				'uuid' => '527b877a-ad7e-4536-82dc-aee109f7a603',
		]);
		LocationTravel::create([
				'pickup_location_id' => 2,
				'drop_off_location_id' => 5,
				'uuid' => '94051d31-ba0a-4642-b8cc-09aff313d937',
		]);
		LocationTravel::create([
				'pickup_location_id' => 2,
				'drop_off_location_id' => 6,
				'uuid' => '5853d2d8-0c9e-4181-b46e-725594ed9f66',
		]);
		LocationTravel::create([
				'pickup_location_id' => 2,
				'drop_off_location_id' => 4,
				'uuid' => 'ed819c99-2875-4403-bea5-6e68e1f99125',
		]);
		LocationTravel::create([
				'pickup_location_id' => 2,
				'drop_off_location_id' => 3,
				'uuid' => '199c586a-8988-41aa-a676-797c3e299d40',
		]);
	}
}
