<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),

            // CHANGE - date_of_birth now represents CSV data more closely
            // 'date_of_birth' => fake()->dateTime()->format('d-m-y'),
            'date_of_birth' => fake()->date('d/m/y'),

            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
