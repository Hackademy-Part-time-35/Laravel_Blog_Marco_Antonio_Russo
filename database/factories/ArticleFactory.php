<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->words(2, true),
            // "user_id" => fake()->numberBetween(1, 56),
            "description" => fake()->words(10, true),
            "body" => fake()->text(),
            "visible" => 1,
            
        ];
    }
}
