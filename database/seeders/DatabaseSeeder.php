<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => fake()->name(),
            'email' => 'admin1@chat-app.com',
            'role' => UserRole::Admin
        ]);
        User::factory()->create([
            'name' => fake()->name(),
            'email' => 'admin2@chat-app.com',
            'role' => UserRole::Admin
        ]);

        User::factory(8)->create();
    }
}
