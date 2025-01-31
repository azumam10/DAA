<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    protected $fillable = [
        'train_id',
        'departure_station_id',
        'arrival_station_id',
        'departure_time',
        'arrival_time',
        'price',
        'available_seats',
    ];

    protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
        'price' => 'decimal:2',
    ];

    public function train(): BelongsTo
    {
        return $this->belongsTo(Train::class);
    }

    public function departureStation(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'departure_station_id');
    }

    public function arrivalStation(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'arrival_station_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
