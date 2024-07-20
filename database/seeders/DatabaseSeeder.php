<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sales;
use App\Models\Products;
use App\Models\Employees;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // CHANGE - Seed the database with meaningful relationships between the models

        // User::factory(10)->create();
        // Sales::factory(10)->create();
        // Products::factory(10)->create();
        // Employees::factory(10)->create();

        Employees::factory()
            ->has(Sales::factory()->count(3))
            ->create();

        Products::factory()
            ->has(Sales::factory()->count(3))
            ->create();

        Sales::factory()->count(10)->create();
    }
}
