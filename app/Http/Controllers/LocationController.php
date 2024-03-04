<?php

namespace App\Http\Controllers;

use App\Models\Location;

class LocationController extends Controller
{
	public function index()
	{
		return Location::with([
				'pickupTravels',
				'dropOffTravels',
		])->get();
	}
}
