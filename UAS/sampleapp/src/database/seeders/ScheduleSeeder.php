<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Train;
use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = Train::all();
        $stations = Station::all();

        Schedule::factory(50)->create([
            'train_id' => $trains->random()->id,
            'departure_station_id' => $stations->random()->id,
            'arrival_station_id' => $stations->random()->id,
            'departure_time' => Date::now()->addDays(random_int(1, 30)),
            'arrival_time' => Date::now()->addDays(random_int(1, 30))->addHours(random_int(1, 12)),
        ]);
    }
}