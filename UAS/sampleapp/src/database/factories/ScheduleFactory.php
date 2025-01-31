<?php
namespace Database\Factories;

use App\Models\Schedule;
use App\Models\Train;
use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;

    public function definition(): array
    {
        return [
            'train_id' => Train::factory(),
            'departure_station_id' => Station::factory(),
            'arrival_station_id' => Station::factory(),
            'departure_time' => $this->faker->dateTimeBetween('now', '+1 month'),
            'arrival_time' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'price' => $this->faker->randomFloat(2, 50, 500),
            'available_seats' => $this->faker->numberBetween(50, 300),
        ];
    }
}
