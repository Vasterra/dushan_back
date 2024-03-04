<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationTravelPrice extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = [];

    public function carType()
    {
        return $this->belongsTo(CarType::class, 'car_type_id', 'id');
    }

    public function travel()
    {
        return $this->hasMany(LocationTravel::class, 'location_travel_id', 'id');
    }
}
