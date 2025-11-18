<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaExample>
 */
class MaExampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'refer_number' => fake()->randomDigit(5, true),
            'date_agreement' => fake()->dateTimeBetween('2025-01-01', '2025-12-31')->format('Y-m-d'),
            'customer' => fake()->company(),
            'membership' => 'platinum',
            'created_by' => fake()->name(),
            'status_ma' => fake()->randomElement(['Not Deal', 'Close', 'Deal']),
        ];
    }
}
