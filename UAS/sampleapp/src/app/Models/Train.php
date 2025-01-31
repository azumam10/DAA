<?php

// app/Models/Train.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Train extends Model
{
    protected $fillable = [
        'name',
        'type', // economy, business, executive
        'capacity',
    ];

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }
}
