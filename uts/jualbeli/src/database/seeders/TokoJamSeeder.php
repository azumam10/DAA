<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TokoJam;

class TokoJamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'Merek' => 'Rolex',
                'Tipe' => 'Oyster Perpetual',
                'Harga' => 120000000
            ]
        ];

        foreach ($data as $dataclass) {
            TokoJam::firstOrCreate([
                'Merek' => $dataclass['Merek'],
                'Tipe' => $dataclass['Tipe'],
                'Harga' => $dataclass['Harga']
            ]);
        }
    }
}
