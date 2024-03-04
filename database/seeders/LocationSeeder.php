<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
                    'name' => 'Vienna',
                'lat' => 48.2083537,
                'lng' => 16.3725042,
        ]);
        Location::create([
                    'name' => 'Prague',
                'lat' => 50.0874654,
                'lng' => 14.4212535,
        ]);
        Location::create([
                    'name' => 'Budapest',
                'lat' => 47.4978789,
                'lng' => 19.0402383,
        ]);
        Location::create([
                    'name' => 'Salzburg',
                'lat' => 47.7981346,
                'lng' => 13.0464806,
        ]);
        Location::create([
                    'name' => 'Berlin',
                'lat' => 52.5170365,
                'lng' => 13.3888599,
        ]);
        Location::create([
                    'name' => 'Munich',
                'lat' => 48.1371079,
                'lng' => 11.5753822,
        ]);
    }
}
