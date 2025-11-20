<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Extention>
 */
class ExtentionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'building' => fake()->randomElement(['Gandaria 8 Office Tower', 'Kota Kasablanka Tower']),
            'ext_no' => fake()->numberBetween(8611, 7899),
            'status' => fake()->randomElement(['On', 'Off'])
        ];
    }
}
