<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationTravel extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = [];

    public function pickUpLocation()
    {
        return $this->belongsTo(Location::class, 'pickup_location_id', 'id');
    }

    public function dropOffLocation()
    {
        return $this->belongsTo(Location::class, 'drop_off_location_id', 'id');
    }

    public function addedStops()
    {
        return $this->hasMany(LocationAddedStop::class, 'location_travel_id', 'id');
    }

    public function prices()
    {
        return $this->hasMany(LocationTravelPrice::class, 'location_travel_id', 'id');
    }
}
