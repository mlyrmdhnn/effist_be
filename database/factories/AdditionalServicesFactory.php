<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdditionalServices>
 */
class AdditionalServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_name' => fake()->sentence(rand(1,2)),
            'price' => fake()->numberBetween(2000000,5000000),
            'remark' => fake()->sentence(rand(1,3))
        ];
    }
}
