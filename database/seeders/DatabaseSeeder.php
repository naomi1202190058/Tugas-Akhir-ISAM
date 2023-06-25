<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ditmawa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "username" => "teluesport",
            "password" => bcrypt("password"),
            "role" => "ukm"
        ]);

        User::create([
            "username" => "123456789",
            "password" => bcrypt("password"),
            "role" => "ditmawa"
        ]);
    }
}
