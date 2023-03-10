<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\State::factory(10)->create();
        \App\Models\LGA::factory(10)->create();
        \App\Models\Ward::factory(10)->create();
        \App\Models\Citizen::factory(10)->create();
        \App\Models\User::factory(10)->create();
        GenderSeeder::class;

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
