<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email'];

    // Relasi many-to-many dengan Penjual (produk jam)
    public function produkTerbeli()
    {
        return $this->belongsToMany(Penjual::class, 'pembelian', 'pembeli_id', 'penjual_id')
                    ->withPivot('jumlah', 'tanggal_pembelian')
                    ->withTimestamps();
    }

    // Fungsi untuk membeli produk
    public function beliProduk(Penjual $produk, int $jumlah = 1)
    {
        return $this->produkTerbeli()->attach($produk->id, ['jumlah' => $jumlah, 'tanggal_pembelian' => now()]);
    }
}
