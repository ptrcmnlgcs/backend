<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First Admin account
        User::factory()->create([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'userType' => 'admin',
            'password' => bcrypt('admin1'), 
        ]);

        // Second Admin account
        User::factory()->create([
            'name' => 'Admin 2',
            'email' => 'admin2@gmail.com',
            'userType' => 'admin',
            'password' => bcrypt('admin2'), 
        ]);
    }
}
