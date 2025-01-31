<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [
            [
                'name' => 'Gambir',
                'city' => 'Jakarta',
                'address' => 'Jl. Medan Merdeka Timur No.1, Jakarta Pusat'
            ],
            [
                'name' => 'Bandung',
                'city' => 'Bandung',
                'address' => 'Jl. Kebon Kawung No.1, Bandung'
            ],
            [
                'name' => 'Tugu',
                'city' => 'Yogyakarta',
                'address' => 'Jl. Margoutomo No.1, Yogyakarta'
            ],
            [
                'name' => 'Semarang Tawang',
                'city' => 'Semarang',
                'address' => 'Jl. Tawang No.1, Semarang'
            ]
        ];

        foreach ($stations as $station) {
            Station::create($station);
        }
    }
}