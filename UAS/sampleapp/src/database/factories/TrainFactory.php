<?php
namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainFactory extends Factory
{
    protected $model = Train::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'type' => $this->faker->randomElement(['economy', 'business', 'executive']),
            'capacity' => $this->faker->numberBetween(100, 500),
        ];
    }
}
