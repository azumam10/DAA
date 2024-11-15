<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = ['pembeli_id', 'toko_jams_id', 'jumlah', 'tanggal_pembelian'];

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }

    public function tokoJam()
    {
        return $this->belongsTo(TokoJam::class, 'toko_jams_id');
    }
}
