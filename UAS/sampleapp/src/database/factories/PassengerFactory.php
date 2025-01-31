<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passenger>
 */
class PassengerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'name' => $this->faker->name(),
            'id_number' => $this->faker->numerify('##########'),
            'seat_number' => strtoupper($this->faker->bothify('##?#')),
        ];
    }
}
