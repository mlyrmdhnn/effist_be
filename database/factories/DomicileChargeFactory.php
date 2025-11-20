<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DomicileCharge>
 */
class DomicileChargeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(rand(1,3)),
            'building' => fake()->randomElement(['Gandaria 8 Office Tower', 'Kota kasablanka Tower']),
            'price' => fake()->numberBetween(400000, 5000000)
        ];
    }
}
