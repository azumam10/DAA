<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Station extends Model
{
    protected $fillable = [
        'name',
        'city',
        'address',
    ];

    public function departureSchedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'departure_station_id');
    }

    public function arrivalSchedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'arrival_station_id');
    }
}