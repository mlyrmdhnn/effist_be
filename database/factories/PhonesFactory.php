<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phones>
 */
class PhonesFactory extends Factory
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
            'phone_no' => fake()->numberBetween(2129851600, 2129607699)
        ];
    }
}
