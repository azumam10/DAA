<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'name' => 'Argo Bromo Anggrek',
                'type' => 'executive',
                'capacity' => 300
            ],
            [
                'name' => 'Gajayana',
                'type' => 'business',
                'capacity' => 400
            ],
            [
                'name' => 'Progo',
                'type' => 'economy',
                'capacity' => 500
            ]
        ];

        foreach ($trains as $train) {
            Train::create($train);
        }
    }
}
