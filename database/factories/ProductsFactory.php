<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // CHANGE - word() is probably more appropriate / semantic
            // 'name' => fake()->name(),
            'name' => fake()->word(),

            // CHANGE - Added range reflecting CSV data
            // 'original_price' => fake()->randomFloat(2),
            'original_price' => fake()->randomFloat(2, 10, 100),

            // CHANGE - Added range reflecting CSV data. Also replaced '%' with 'percent'
            // 'discount_20%_when_over_price' => fake()->randomFloat(2),
            'discount_20_percent_when_over_price' => fake()->randomFloat(2, 400, 500),
        ];
    }
}
