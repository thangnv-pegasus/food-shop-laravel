<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'create_at' => fake()->time('dd/MM/yyyy', 'now'),
            'author' => fake()->name(),
            'content' => fake()->paragraphs(6),
            'image' => fake()->imageUrl()
        ];
    }
}