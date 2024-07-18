<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales>
 */
class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee' => fake()->numberBetween(1, 99),

            // CHANGE - date_time_of_sale now represents CSV data more closely
            // 'date_time_of_sale' => fake()->date(),
            'date_time_of_sale' => fake()->date('d/m/y'),

            'sale_price' => fake()->numberBetween(10, 1000),
            'product_id' => fake()->numberBetween(1, 10)
        ];
    }
}
