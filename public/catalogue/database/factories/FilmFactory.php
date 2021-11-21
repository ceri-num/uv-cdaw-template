<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 10),
            'name' => $this->faker->unique()->word, // A single unique word
            'director' => $this->faker->unique()->word, // A single unique word
            'category' => $this->faker->unique()->word // A single unique word
        ];
    }
}