<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\TokoJam;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    
    // Fungsi untuk membeli produk
    public function beli(Request $request, $pembeliId, $produkId)
    {
        // Validasi input (jumlah)
        $request->validate([
            'jumlah' => 'required|integer|min:1',
        ]);

        // Ambil data pembeli dan produk
        $pembeli = Pembeli::findOrFail($pembeliId);
        $produk = TokoJam::findOrFail($produkId);

        // Lakukan pembelian
        $pembeli->beliProduk($produk, $request->jumlah);

        // Tanggapan sukses
        return redirect()->route('pembeli.show', $pembeliId)
                         ->with('success', 'Produk berhasil dibeli!');
        
                         // Di controller
$pembeli = Pembeli::find($pembeliId);
$produkTerbeli = $pembeli->produkTerbeli;

return view('pembeli.show', compact('pembeli', 'produkTerbeli'));

    }
}
