<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check if the roles already exist
        if (!Role::where('name', 'Admin')->exists()) {
            Role::create(['name' => 'Admin', 'guard_name' => 'web']);
        }

        if (!Role::where('name', 'User')->exists()) {
            Role::create(['name' => 'User', 'guard_name' => 'web']);
        }
    }
}