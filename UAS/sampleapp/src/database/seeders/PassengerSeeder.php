<?php

namespace Database\Seeders;

use App\Models\Passenger;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = Booking::all();

        $bookings->each(function ($booking) {
            Passenger::factory(random_int(1, 5))->create([
                'booking_id' => $booking->id,
            ]);
        });
    }
}