<?php

namespace Database\Seeders;
use App\Models\Product; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['nama' => 'Adidas', 'harga' =>1000000, 'kategori' => 'sepatu'],
            ['nama' => 'compas', 'harga' =>450000, 'kategori' => 'sepatu'],
            ['nama' => 'denim', 'harga' =>300000, 'kategori' => 'celana'],
            ['nama' => 'gozeal', 'harga' =>99000, 'kategori' => 'baju'],
        ]);
    }
}
