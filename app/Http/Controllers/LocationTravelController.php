<?php

namespace App\Http\Controllers;

use App\Models\LocationTravel;

class LocationTravelController extends Controller
{
	public function index()
	{
		return LocationTravel::with('addedStops', 'prices.carType')->get();
	}
}
