<?php

namespace Database\Seeders;

use App\Models\LocationAddedStop;
use Illuminate\Database\Seeder;

class LocationAddedStopSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		// Vienna to Prague
		LocationAddedStop::create([
				'name' => 'Lednice Chateau',
				'location_travel_id' => 1,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 48.8016039,
				'lng' => 16.8053685,
		]);
		LocationAddedStop::create([
						'name' => 'Cesky Krumlov',
				'location_travel_id' => 1,
				'price' => 125,
				'price_for_8_pax' => 250,
				'lat' => 48.805115,
				'lng' => 14.3161978,
		]);
		LocationAddedStop::create([
						'name' => 'Kutna Hora',
				'location_travel_id' => 1,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.9486561,
				'lng' => 15.2681123,
		]);
		LocationAddedStop::create([
						'name' => 'Bratislava',
				'location_travel_id' => 1,
				'price' => 110,
				'price_for_8_pax' => 220,
				'lat' => 48.1516988,
				'lng' => 17.1093063,
		]);
		LocationAddedStop::create([
						'name' => 'Parndorf Outlet',
				'location_travel_id' => 1,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 47.976762,
				'lng' => 16.8473473,
		]);

		// Vienna to Budapest
		LocationAddedStop::create([
						'name' => 'Parndorf Outlet',
				'location_travel_id' => 2,
				'price' => 70,
				'price_for_8_pax' => 140,
				'lat' => 47.976762,
				'lng' => 16.8473473,
		]);
		LocationAddedStop::create([
						'name' => 'Bratislava',
				'location_travel_id' => 2,
				'price' => 70,
				'price_for_8_pax' => 140,
				'lat' => 48.1516988,
				'lng' => 17.1093063,
		]);
		LocationAddedStop::create([
						'name' => 'Schloss Esterhazy',
				'location_travel_id' => 2,
				'price' => 55,
				'price_for_8_pax' => 110,
				'lat' => 47.8464987,
				'lng' => 16.5189015,
		]);
		LocationAddedStop::create([
						'name' => 'Pannonhalma Archabbey',
				'location_travel_id' => 2,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 47.5502015,
				'lng' => 17.7541679,
		]);
		LocationAddedStop::create([
						'name' => 'Esztergom',
				'location_travel_id' => 2,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 47.7856939,
				'lng' => 18.7403377,
		]);

		// Vienna to Salzburg
		LocationAddedStop::create([
						'name' => 'Melk',
				'location_travel_id' => 3,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 48.2272068,
				'lng' => 15.3369992,
		]);
		LocationAddedStop::create([
						'name' => 'Admont',
				'location_travel_id' => 3,
				'price' => 75,
				'price_for_8_pax' => 150,
				'lat' => 47.573782,
				'lng' => 14.4615721,
		]);
		LocationAddedStop::create([
						'name' => 'Mauthausen',
				'location_travel_id' => 3,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 48.2404063,
				'lng' => 14.5162667,
		]);
		LocationAddedStop::create([
						'name' => 'Hallstatt',
				'location_travel_id' => 3,
				'price' => 120,
				'price_for_8_pax' => 240,
				'lat' => 47.5621698,
				'lng' => 13.6486697,
		]);
		LocationAddedStop::create([
						'name' => 'St.Gilgen',
				'location_travel_id' => 3,
				'price' => 55,
				'price_for_8_pax' => 110,
				'lat' => 47.7670412,
				'lng' => 13.3642943,
		]);

		// Prague to Berlin
		LocationAddedStop::create([
						'name' => 'Terezin',
				'location_travel_id' => 4,
				'price' => 40,
				'price_for_8_pax' => 80,
				'lat' => 50.510716,
				'lng' => 14.149717,
		]);
		LocationAddedStop::create([
						'name' => 'Dresden',
				'location_travel_id' => 4,
				'price' => 65,
				'price_for_8_pax' => 130,
				'lat' => 51.0493286,
				'lng' => 13.7381437,
		]);
		LocationAddedStop::create([
						'name' => 'Moritzburg',
				'location_travel_id' => 4,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 51.1592018,
				'lng' => 13.6819406,
		]);
		LocationAddedStop::create([
						'name' => 'Meissen',
				'location_travel_id' => 4,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 51.1630871,
				'lng' => 13.4704939,
		]);
		LocationAddedStop::create([
						'name' => 'Potsdam',
				'location_travel_id' => 4,
				'price' => 60,
				'price_for_8_pax' => 120,
				'lat' => 52.4009309,
				'lng' => 13.0591397,
		]);

		// Prague to Munich
		LocationAddedStop::create([
				'name' => 'Karlstejn',
				'location_travel_id' => 5,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 49.933809,
				'lng' => 14.1832917,
		]);
		LocationAddedStop::create([
				'name' => 'Zbiroh',
				'location_travel_id' => 5,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.8592406,
				'lng' => 13.7711465,
		]);
		LocationAddedStop::create([
				'name' => 'Pilsen',
				'location_travel_id' => 5,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.7477415,
				'lng' => 14.1832917,
		]);
		LocationAddedStop::create([
				'name' => 'Abbey Waldsassen',
				'location_travel_id' => 5,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 50.00167,
				'lng' => 12.30434,
		]);
		LocationAddedStop::create([
				'name' => 'Dachau Memorial',
				'location_travel_id' => 5,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 47.6978718,
				'lng' => 10.3244047,
		]);

		// Prague to Salzburg
		LocationAddedStop::create([
				'name' => 'Hluboka',
				'location_travel_id' => 6,
				'price' => 40,
				'price_for_8_pax' => 80,
				'lat' => 49.8455813,
				'lng' => 16.0715447,
		]);
		LocationAddedStop::create([
				'name' => 'Cesky Krumlov',
				'location_travel_id' => 6,
				'price' => 60,
				'price_for_8_pax' => 120,
				'lat' => 48.805115,
				'lng' => 14.3161978,
		]);
		LocationAddedStop::create([
				'name' => 'Hallstatt',
				'location_travel_id' => 6,
				'price' => 70,
				'price_for_8_pax' => 140,
				'lat' => 47.5621698,
				'lng' => 13.6486697,
		]);
		LocationAddedStop::create([
				'name' => 'Ceske Budejovice',
				'location_travel_id' => 6,
				'price' => 60,
				'price_for_8_pax' => 120,
				'lat' => 48.9747357,
				'lng' => 14.474285,
		]);

		// Prague to Budapest
		LocationAddedStop::create([
				'name' => 'Kutna Hora',
				'location_travel_id' => 7,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.8455813,
				'lng' => 16.0715447,
		]);
		LocationAddedStop::create([
				'name' => 'Vienna',
				'location_travel_id' => 7,
				'price' => 100,
				'price_for_8_pax' => 200,
				'lat' => 48.2083537,
				'lng' => 16.3725042,
		]);
		LocationAddedStop::create([
				'name' => 'Mikulov',
				'location_travel_id' => 7,
				'price' => 40,
				'price_for_8_pax' => 80,
				'lat' => 48.8068577,
				'lng' => 16.6383914,
		]);
		LocationAddedStop::create([
				'name' => 'Lednice Chateau',
				'location_travel_id' => 7,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 48.8016039,
				'lng' => 16.8053685,
		]);
		LocationAddedStop::create([
				'name' => 'Bratislava',
				'location_travel_id' => 7,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 48.1516988,
				'lng' => 17.1093063,
		]);
	}
}
