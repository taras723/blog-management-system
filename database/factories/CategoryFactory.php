<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('en_US');
        return [
            'name' => $this->faker->word,
            'backgroundColor' => $this->faker->hexColor(),
            'textColor' => $this->faker->hexColor(),
        ];
    }
}
