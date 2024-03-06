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
				'uuid' => '49a07e80-d4ee-48f7-8209-bd671cf5a6bd',
				'photo' => 'assets/images/location_added_stops/7282e515-851a-42d9-9f2d-993560e8213f/49a07e80-d4ee-48f7-8209-bd671cf5a6bd.png',
		]);
		LocationAddedStop::create([
				'name' => 'Cesky Krumlov',
				'location_travel_id' => 1,
				'price' => 125,
				'price_for_8_pax' => 250,
				'lat' => 48.805115,
				'lng' => 14.3161978,
				'uuid' => '834204be-3923-4eb4-a574-d1c59615c842',
				'photo' => 'assets/images/location_added_stops/7282e515-851a-42d9-9f2d-993560e8213f/834204be-3923-4eb4-a574-d1c59615c842.png',
		]);
		LocationAddedStop::create([
				'name' => 'Kutna Hora',
				'location_travel_id' => 1,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.9486561,
				'lng' => 15.2681123,
				'uuid' => 'ced699fa-9c52-45c1-a055-7bf8db648d35',
				'photo' => 'assets/images/location_added_stops/7282e515-851a-42d9-9f2d-993560e8213f/ced699fa-9c52-45c1-a055-7bf8db648d35.png',
		]);
		LocationAddedStop::create([
				'name' => 'Bratislava',
				'location_travel_id' => 1,
				'price' => 110,
				'price_for_8_pax' => 220,
				'lat' => 48.1516988,
				'lng' => 17.1093063,
				'uuid' => '74548da3-be01-451f-ad43-a84009b80ef7',
				'photo' => 'assets/images/location_added_stops/7282e515-851a-42d9-9f2d-993560e8213f/74548da3-be01-451f-ad43-a84009b80ef7.png',
		]);
		LocationAddedStop::create([
				'name' => 'Parndorf Outlet',
				'location_travel_id' => 1,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 47.976762,
				'lng' => 16.8473473,
				'uuid' => 'd49f6ad1-8dca-4bc2-943b-40de3159fd16',
				'photo' => 'assets/images/location_added_stops/7282e515-851a-42d9-9f2d-993560e8213f/d49f6ad1-8dca-4bc2-943b-40de3159fd16.png',
		]);

		// Vienna to Budapest
		LocationAddedStop::create([
				'name' => 'Parndorf Outlet',
				'location_travel_id' => 2,
				'price' => 70,
				'price_for_8_pax' => 140,
				'lat' => 47.976762,
				'lng' => 16.8473473,
				'uuid' => '0d0f1448-9e03-4152-baa6-2bcc1360841a',
				'photo' => 'assets/images/location_added_stops/bc1c3b1c-465a-43d2-97df-41bb498a9be3/0d0f1448-9e03-4152-baa6-2bcc1360841a.png',
		]);
		LocationAddedStop::create([
				'name' => 'Bratislava',
				'location_travel_id' => 2,
				'price' => 70,
				'price_for_8_pax' => 140,
				'lat' => 48.1516988,
				'lng' => 17.1093063,
				'uuid' => '693a9039-7b15-42ba-94cf-70b24e0b413c',
				'photo' => 'assets/images/location_added_stops/bc1c3b1c-465a-43d2-97df-41bb498a9be3/693a9039-7b15-42ba-94cf-70b24e0b413c.png',
		]);
		LocationAddedStop::create([
				'name' => 'Schloss Esterhazy',
				'location_travel_id' => 2,
				'price' => 55,
				'price_for_8_pax' => 110,
				'lat' => 47.8464987,
				'lng' => 16.5189015,
				'uuid' => '76be5993-ad01-4f94-8321-a519dc94e3b1',
				'photo' => 'assets/images/location_added_stops/bc1c3b1c-465a-43d2-97df-41bb498a9be3/76be5993-ad01-4f94-8321-a519dc94e3b1.png',
		]);
		LocationAddedStop::create([
				'name' => 'Pannonhalma Archabbey',
				'location_travel_id' => 2,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 47.5502015,
				'lng' => 17.7541679,
				'uuid' => 'e101363c-9574-4c93-b8c4-29006880deb7',
				'photo' => 'assets/images/location_added_stops/bc1c3b1c-465a-43d2-97df-41bb498a9be3/e101363c-9574-4c93-b8c4-29006880deb7.png',
		]);
		LocationAddedStop::create([
				'name' => 'Esztergom',
				'location_travel_id' => 2,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 47.7856939,
				'lng' => 18.7403377,
				'uuid' => 'c8fe9dea-f555-4c13-bf4e-5760d699fe97',
				'photo' => 'assets/images/location_added_stops/bc1c3b1c-465a-43d2-97df-41bb498a9be3/c8fe9dea-f555-4c13-bf4e-5760d699fe97.png',
		]);

		// Vienna to Salzburg
		LocationAddedStop::create([
				'name' => 'Melk',
				'location_travel_id' => 3,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 48.2272068,
				'lng' => 15.3369992,
				'uuid' => '19e674f3-a0bd-4305-af40-08ce1ab9b141',
				'photo' => 'assets/images/location_added_stops/527b877a-ad7e-4536-82dc-aee109f7a603/19e674f3-a0bd-4305-af40-08ce1ab9b141.png',
		]);
		LocationAddedStop::create([
				'name' => 'Admont',
				'location_travel_id' => 3,
				'price' => 75,
				'price_for_8_pax' => 150,
				'lat' => 47.573782,
				'lng' => 14.4615721,
				'uuid' => 'be1393b0-c81a-4e93-ae68-033aff6635ef',
				'photo' => 'assets/images/location_added_stops/527b877a-ad7e-4536-82dc-aee109f7a603/be1393b0-c81a-4e93-ae68-033aff6635ef.png',
		]);
		LocationAddedStop::create([
				'name' => 'Mauthausen',
				'location_travel_id' => 3,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 48.2404063,
				'lng' => 14.5162667,
				'uuid' => 'b4bb9019-4df0-4a8c-8d22-8473143dcf3c',
				'photo' => 'assets/images/location_added_stops/527b877a-ad7e-4536-82dc-aee109f7a603/b4bb9019-4df0-4a8c-8d22-8473143dcf3c.png',
		]);
		LocationAddedStop::create([
				'name' => 'Hallstatt',
				'location_travel_id' => 3,
				'price' => 120,
				'price_for_8_pax' => 240,
				'lat' => 47.5621698,
				'lng' => 13.6486697,
				'uuid' => '3e1116e5-cb0c-47b0-bc45-b5f36172e788',
				'photo' => 'assets/images/location_added_stops/527b877a-ad7e-4536-82dc-aee109f7a603/3e1116e5-cb0c-47b0-bc45-b5f36172e788.png',
		]);
		LocationAddedStop::create([
				'name' => 'St.Gilgen',
				'location_travel_id' => 3,
				'price' => 55,
				'price_for_8_pax' => 110,
				'lat' => 47.7670412,
				'lng' => 13.3642943,
				'uuid' => '2c03a165-944b-47c8-bc0c-425e0be68631',
				'photo' => 'assets/images/location_added_stops/527b877a-ad7e-4536-82dc-aee109f7a603/2c03a165-944b-47c8-bc0c-425e0be68631.png',
		]);

		// Prague to Berlin
		LocationAddedStop::create([
				'name' => 'Terezin',
				'location_travel_id' => 4,
				'price' => 40,
				'price_for_8_pax' => 80,
				'lat' => 50.510716,
				'lng' => 14.149717,
				'uuid' => '7382a91b-203c-48ae-ba82-130188e73174',
				'photo' => 'assets/images/location_added_stops/94051d31-ba0a-4642-b8cc-09aff313d937/7382a91b-203c-48ae-ba82-130188e73174.png',
		]);
		LocationAddedStop::create([
				'name' => 'Dresden',
				'location_travel_id' => 4,
				'price' => 65,
				'price_for_8_pax' => 130,
				'lat' => 51.0493286,
				'lng' => 13.7381437,
				'uuid' => 'e0cc1dff-a2f2-432f-89f3-cba65a087173',
				'photo' => 'assets/images/location_added_stops/94051d31-ba0a-4642-b8cc-09aff313d937/e0cc1dff-a2f2-432f-89f3-cba65a087173.png',
		]);
		LocationAddedStop::create([
				'name' => 'Moritzburg',
				'location_travel_id' => 4,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 51.1592018,
				'lng' => 13.6819406,
				'uuid' => '074ab3fd-05e4-4de9-8c1e-2eebfcc0eeca',
				'photo' => 'assets/images/location_added_stops/94051d31-ba0a-4642-b8cc-09aff313d937/074ab3fd-05e4-4de9-8c1e-2eebfcc0eeca.png',
		]);
		LocationAddedStop::create([
				'name' => 'Meissen',
				'location_travel_id' => 4,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 51.1630871,
				'lng' => 13.4704939,
				'uuid' => '4ad52b4e-4bcb-4237-8a78-83c7df2866c7',
				'photo' => 'assets/images/location_added_stops/94051d31-ba0a-4642-b8cc-09aff313d937/4ad52b4e-4bcb-4237-8a78-83c7df2866c7.png',
		]);
		LocationAddedStop::create([
				'name' => 'Potsdam',
				'location_travel_id' => 4,
				'price' => 60,
				'price_for_8_pax' => 120,
				'lat' => 52.4009309,
				'lng' => 13.0591397,
				'uuid' => '7033d1b3-36cd-4bf8-ba0b-1d0ef52e14df',
				'photo' => 'assets/images/location_added_stops/94051d31-ba0a-4642-b8cc-09aff313d937/7033d1b3-36cd-4bf8-ba0b-1d0ef52e14df.png',
		]);

		// Prague to Munich
		LocationAddedStop::create([
				'name' => 'Karlstejn',
				'location_travel_id' => 5,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 49.933809,
				'lng' => 14.1832917,
				'uuid' => '487597a5-fbea-4555-ae34-1e63a83bbb12',
				'photo' => 'assets/images/location_added_stops/5853d2d8-0c9e-4181-b46e-725594ed9f66/487597a5-fbea-4555-ae34-1e63a83bbb12.png',
		]);
		LocationAddedStop::create([
				'name' => 'Zbiroh',
				'location_travel_id' => 5,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.8592406,
				'lng' => 13.7711465,
				'uuid' => '67e2367e-1a73-49da-8d77-af8da8d57b06',
				'photo' => 'assets/images/location_added_stops/5853d2d8-0c9e-4181-b46e-725594ed9f66/67e2367e-1a73-49da-8d77-af8da8d57b06.png',
		]);
		LocationAddedStop::create([
				'name' => 'Pilsen',
				'location_travel_id' => 5,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.7477415,
				'lng' => 14.1832917,
				'uuid' => '89972d01-7024-4dc2-b24a-d7103acb6b6c',
				'photo' => 'assets/images/location_added_stops/5853d2d8-0c9e-4181-b46e-725594ed9f66/89972d01-7024-4dc2-b24a-d7103acb6b6c.png',
		]);
		LocationAddedStop::create([
				'name' => 'Abbey Waldsassen',
				'location_travel_id' => 5,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 50.00167,
				'lng' => 12.30434,
				'uuid' => 'f2a9991f-c93c-4227-aac9-704bc9bf2be7',
				'photo' => 'assets/images/location_added_stops/5853d2d8-0c9e-4181-b46e-725594ed9f66/f2a9991f-c93c-4227-aac9-704bc9bf2be7.png',
		]);
		LocationAddedStop::create([
				'name' => 'Dachau Memorial',
				'location_travel_id' => 5,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 47.6978718,
				'lng' => 10.3244047,
				'uuid' => 'd690e1dc-840d-41c0-b4e5-d8dd54817a78',
				'photo' => 'assets/images/location_added_stops/5853d2d8-0c9e-4181-b46e-725594ed9f66/d690e1dc-840d-41c0-b4e5-d8dd54817a78.png',
		]);

		// Prague to Salzburg
		LocationAddedStop::create([
				'name' => 'Konopiste Castle',
				'location_travel_id' => 6,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.779866,
				'lng' => 14.682922,
				'uuid' => '03598ba4-5672-4ac7-a16f-9b0477df1984',
				'photo' => 'assets/images/location_added_stops/ed819c99-2875-4403-bea5-6e68e1f99125/03598ba4-5672-4ac7-a16f-9b0477df1984.png',
		]);
		LocationAddedStop::create([
				'name' => 'Hluboka',
				'location_travel_id' => 6,
				'price' => 40,
				'price_for_8_pax' => 80,
				'lat' => 49.8455813,
				'lng' => 16.0715447,
				'uuid' => '0dec244a-bab1-46fd-ad19-1716ecbeaaee',
				'photo' => 'assets/images/location_added_stops/ed819c99-2875-4403-bea5-6e68e1f99125/0dec244a-bab1-46fd-ad19-1716ecbeaaee.png',
		]);
		LocationAddedStop::create([
				'name' => 'Cesky Krumlov',
				'location_travel_id' => 6,
				'price' => 60,
				'price_for_8_pax' => 120,
				'lat' => 48.805115,
				'lng' => 14.3161978,
				'uuid' => '58496eef-5752-409a-9f36-fef55961204a',
				'photo' => 'assets/images/location_added_stops/ed819c99-2875-4403-bea5-6e68e1f99125/58496eef-5752-409a-9f36-fef55961204a.png',
		]);
		LocationAddedStop::create([
				'name' => 'Hallstatt',
				'location_travel_id' => 6,
				'price' => 70,
				'price_for_8_pax' => 140,
				'lat' => 47.5621698,
				'lng' => 13.6486697,
				'uuid' => '8f271fbc-6d38-435c-a11d-14c1081fccb2',
				'photo' => 'assets/images/location_added_stops/ed819c99-2875-4403-bea5-6e68e1f99125/8f271fbc-6d38-435c-a11d-14c1081fccb2.png',
		]);
		LocationAddedStop::create([
				'name' => 'Ceske Budejovice',
				'location_travel_id' => 6,
				'price' => 60,
				'price_for_8_pax' => 120,
				'lat' => 48.9747357,
				'lng' => 14.474285,
				'uuid' => '429cafe3-4dae-43db-a34d-71d2dff555c0',
				'photo' => 'assets/images/location_added_stops/ed819c99-2875-4403-bea5-6e68e1f99125/429cafe3-4dae-43db-a34d-71d2dff555c0.png',
		]);

		// Prague to Budapest
		LocationAddedStop::create([
				'name' => 'Kutna Hora',
				'location_travel_id' => 7,
				'price' => 35,
				'price_for_8_pax' => 70,
				'lat' => 49.8455813,
				'lng' => 16.0715447,
				'uuid' => '477426b5-46a3-4c43-8e22-ef2ebb419224',
				'photo' => 'assets/images/location_added_stops/199c586a-8988-41aa-a676-797c3e299d40/477426b5-46a3-4c43-8e22-ef2ebb419224.png',
		]);
		LocationAddedStop::create([
				'name' => 'Vienna',
				'location_travel_id' => 7,
				'price' => 100,
				'price_for_8_pax' => 200,
				'lat' => 48.2083537,
				'lng' => 16.3725042,
				'uuid' => '355c0f66-6ad6-4960-9a34-b9f11883b80d',
				'photo' => 'assets/images/location_added_stops/199c586a-8988-41aa-a676-797c3e299d40/355c0f66-6ad6-4960-9a34-b9f11883b80d.png',
		]);
		LocationAddedStop::create([
				'name' => 'Mikulov',
				'location_travel_id' => 7,
				'price' => 40,
				'price_for_8_pax' => 80,
				'lat' => 48.8068577,
				'lng' => 16.6383914,
				'uuid' => '45ebdfd0-b7e0-41d2-a24d-a842af8ff7cb',
				'photo' => 'assets/images/location_added_stops/199c586a-8988-41aa-a676-797c3e299d40/45ebdfd0-b7e0-41d2-a24d-a842af8ff7cb.png',
		]);
		LocationAddedStop::create([
				'name' => 'Lednice Chateau',
				'location_travel_id' => 7,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 48.8016039,
				'lng' => 16.8053685,
				'uuid' => '66a6f1fc-2280-4232-a2f0-5c7117cc7e26',
				'photo' => 'assets/images/location_added_stops/199c586a-8988-41aa-a676-797c3e299d40/66a6f1fc-2280-4232-a2f0-5c7117cc7e26.png',
		]);
		LocationAddedStop::create([
				'name' => 'Bratislava',
				'location_travel_id' => 7,
				'price' => 45,
				'price_for_8_pax' => 90,
				'lat' => 48.1516988,
				'lng' => 17.1093063,
				'uuid' => '2295974c-1ea4-4c78-8d31-514e813d1a25',
				'photo' => 'assets/images/location_added_stops/199c586a-8988-41aa-a676-797c3e299d40/2295974c-1ea4-4c78-8d31-514e813d1a25.png',
		]);
	}
}
