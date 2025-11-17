<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Illuminate\Support\enum_value;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InquiryExample>
 */
class InquiryExampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'product_type' => fake()->sentence(rand(1,2)),
            'building' => fake()->randomElement(['Gandaria Office Tower', 'Kota Kasablanka Offie Tower']),
            'date' => fake()->dateTimeBetween('2025-01-01', '2025-12-31')->format('Y-m-d'),
            'customer' => fake()->name(),
            'status' => fake()->randomElement(['on', 'open']),
            'description' => fake()->text(),
            'last_update' => fake()->date()
        ];
    }
}
