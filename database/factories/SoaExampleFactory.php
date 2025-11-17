<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoaExample>
 */
class SoaExampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->integer('refer_number');
            // $table->date('date_agreement');
            // $table->string('customer');
            // $table->string('office');
            // $table->string('type');
            // $table->string('created_by');
            // $table->string('status_soa');
            // $table->timestamps();
            'refer_number' => fake()->randomDigit(5, true),
            'date_agreement' => fake()->dateTimeBetween('2025-01-01', '2025-12-31')->format('Y-m-d'),
            'customer' => fake()->name(),
            'office' => fake()->randomElement(['Single Room', 'Multiple Room']),
            'type' => fake()->randomDigit(3, true),
            'created_by' => fake()->name(),
            'status_soa' => fake()->randomElement(['Renewal', 'Cancel', 'Deal', 'Not deal'])

        ];
    }
}
