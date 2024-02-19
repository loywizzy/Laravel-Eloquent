<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('th_TH')->name,
            'description' => fake('th_TH')->sentence,
            'price' => fake()->randomFloat(2, 10, 100),
            'quantity' => fake()->numberBetween(1, 100),
            'category' => fake()->word,
        ];
    }
}
