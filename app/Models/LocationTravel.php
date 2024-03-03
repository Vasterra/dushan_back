<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationTravel extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = [];

    public function carType()
    {
        return $this->belongsTo(CarType::class, 'car_type_id', 'id');
    }

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
}
