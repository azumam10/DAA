<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoJam extends Model
{
    use HasFactory;
    protected $fillable =[
        'Id',
        'Merek',
        'Tipe',
        'Harga'
    ];
}
