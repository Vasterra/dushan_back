<?php

namespace Database\Seeders;

use App\Models\LocationTravelPrice;
use Illuminate\Database\Seeder;

class LocationTravelPriceSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		// Vienna to Prague
		LocationTravelPrice::create([
				'car_type_id' => 1,
				'location_travel_id' => 1,
				'price' => 320,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 2,
				'location_travel_id' => 1,
				'price' => 458,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 3,
				'location_travel_id' => 1,
				'price' => 477,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 4,
				'location_travel_id' => 1,
				'price' => 778,
		]);

		// Vienna to Budapest
		LocationTravelPrice::create([
				'car_type_id' => 1,
				'location_travel_id' => 2,
				'price' => 299,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 2,
				'location_travel_id' => 2,
				'price' => 454,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 3,
				'location_travel_id' => 2,
				'price' => 446,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 4,
				'location_travel_id' => 2,
				'price' => 753,
		]);

		// Vienna to Salzburg
		LocationTravelPrice::create([
				'car_type_id' => 1,
				'location_travel_id' => 3,
				'price' => 420,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 2,
				'location_travel_id' => 3,
				'price' => 504,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 3,
				'location_travel_id' => 3,
				'price' => 764,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 4,
				'location_travel_id' => 3,
				'price' => 924,
		]);

		// Prague to Berlin
		LocationTravelPrice::create([
				'car_type_id' => 1,
				'location_travel_id' => 4,
				'price' => 345,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 2,
				'location_travel_id' => 4,
				'price' => 431,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 3,
				'location_travel_id' => 4,
				'price' => 407,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 4,
				'location_travel_id' => 4,
				'price' => 752,
		]);

		// Prague to Munich
		LocationTravelPrice::create([
				'car_type_id' => 1,
				'location_travel_id' => 5,
				'price' => 350,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 2,
				'location_travel_id' => 5,
				'price' => 490,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 3,
				'location_travel_id' => 5,
				'price' => 462,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 4,
				'location_travel_id' => 5,
				'price' => 812,
		]);

		// Prague to Salzburg
		LocationTravelPrice::create([
				'car_type_id' => 1,
				'location_travel_id' => 6,
				'price' => 390,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 2,
				'location_travel_id' => 6,
				'price' => 581,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 3,
				'location_travel_id' => 6,
				'price' => 593,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 4,
				'location_travel_id' => 6,
				'price' => 983,
		]);

		// Prague to Budapest
		LocationTravelPrice::create([
				'car_type_id' => 1,
				'location_travel_id' => 7,
				'price' => 489,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 2,
				'location_travel_id' => 7,
				'price' => 729,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 3,
				'location_travel_id' => 7,
				'price' => 685,
		]);
		LocationTravelPrice::create([
				'car_type_id' => 4,
				'location_travel_id' => 7,
				'price' => 1174,
		]);
	}
}
