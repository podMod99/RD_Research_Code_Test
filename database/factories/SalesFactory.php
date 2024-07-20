<?php

namespace Database\Factories;

use App\Models\Employees;
use App\Models\Products;
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
            // CHANGE - Create a new employee instance whenever a sales instance is created. Do the same for product
            // 'employee' => fake()->numberBetween(1, 99),
            // 'product_id' => fake()->numberBetween(1, 10)
            'employees_id' => Employees::factory(),
            'products_id' => Products::factory(),

            // CHANGE - date_time_of_sale now represents CSV data more closely
            // 'date_time_of_sale' => fake()->date(),
            'date_time_of_sale' => fake()->date('d/m/y'),

            'sale_price' => fake()->numberBetween(10, 600),

        ];
    }
}
