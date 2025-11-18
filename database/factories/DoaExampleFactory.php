<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoaExample>
 */
class DoaExampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'refer_number' => fake()->randomDigit(5,true),
            'date_agreement' => fake()->dateTimeBetween('2025-01-01', '2025-12-31')->format('Y-m-d'),
            'customer' => fake()->company(),
            'office' => fake()->sentence(rand(1,2)),
            'created_by' => fake()->name(),
            'status_doa' => fake()->randomElement(['Not Deal', 'Deal', 'Stop']),
        ];
    }
}
