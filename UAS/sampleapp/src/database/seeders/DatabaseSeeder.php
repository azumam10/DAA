<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Booking;
use App\Models\Passenger;
use App\Models\Schedule;
use App\Models\Station;
use App\Models\Train;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call individual seeders

        // Seed users
        $this->seedUsers();
        $this->callSeeders();
    }

    private function seedUsers(): void
    {
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createmany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                
                [
                    'name' => 'User',
                    'email' => 'User@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                    }
                }
            }
        }

            private function callSeeders(): void {
                $this->call([
                    RoleSeeder::class,
                    BookingSeeder::class,
                    PassengerSeeder::class,
                    ScheduleSeeder::class,
                    StationSeeder::class,
                    TrainSeeder::class,
                ]);

            }
        }