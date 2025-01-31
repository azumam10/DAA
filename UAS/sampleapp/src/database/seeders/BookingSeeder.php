<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $schedules = Schedule::all();

        // Pastikan ada user dan schedule sebelum membuat booking
        if ($users->isEmpty() || $schedules->isEmpty()) {
            $this->command->warn('Skipping BookingSeeder: No users or schedules found.');
            return;
        }

        Booking::factory(20)->create()->each(function ($booking) use ($users, $schedules) {
            $booking->update([
                'user_id' => $users->random()->id,
                'schedule_id' => $schedules->random()->id,
            ]);
        });
    }
}
