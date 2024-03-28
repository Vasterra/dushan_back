<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		CarType::create([
					'name' => 'Sedan',
		]);
		CarType::create([
					'name' => 'Minivan',
		]);
		CarType::create([
					'name' => 'Luxury sedan',
		]);
		CarType::create([
					'name' => 'Combo minivan + sedan',
		]);
	}
}
