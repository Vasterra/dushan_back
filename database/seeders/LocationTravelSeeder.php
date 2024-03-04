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
        ]);
        LocationTravel::create([
                        'pickup_location_id' => 1,
                        'drop_off_location_id' => 3,
        ]);
        LocationTravel::create([
                        'pickup_location_id' => 1,
                            'drop_off_location_id' => 4,
        ]);
        LocationTravel::create([
                        'pickup_location_id' => 2,
                        'drop_off_location_id' => 5,
        ]);
        LocationTravel::create([
                        'pickup_location_id' => 2,
                        'drop_off_location_id' => 6,
        ]);
        LocationTravel::create([
                        'pickup_location_id' => 2,
                        'drop_off_location_id' => 4,
        ]);
        LocationTravel::create([
                        'pickup_location_id' => 2,
                        'drop_off_location_id' => 3,
        ]);
    }
}
