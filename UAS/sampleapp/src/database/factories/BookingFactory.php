<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;
use App\Models\User;
use App\Models\Schedule;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'schedule_id' => Schedule::factory(),
            'booking_code' => strtoupper($this->faker->unique()->lexify('BK????')),
            'total_price' => $this->faker->randomFloat(2, 100000, 1000000),
            'status' => $this->faker->randomElement(['pending', 'paid', 'cancelled']),
            'payment_method' => $this->faker->randomElement(['credit_card', 'bank_transfer', 'cash']),
            'payment_status' => $this->faker->randomElement(['pending', 'paid']),
        ];
    }
}
