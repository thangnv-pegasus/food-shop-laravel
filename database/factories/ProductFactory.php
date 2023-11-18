<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->numberBetween(10, 100),
            'price_sale' => fake()->numberBetween(10, 100),//->default(0)
            'brand' => fake()->company(),
            'origin' => fake()->country(),
            'weigh' => fake()->numberBetween(0, 1),
            'collection' => fake()->text(20),
            'description' => fake()->paragraphs(4),
            'detail' => fake()->paragraphs(10),
            'images' => fake()->imageUrl(),
            'sold' => fake()->numberBetween(20,100)
        ];
    }
}