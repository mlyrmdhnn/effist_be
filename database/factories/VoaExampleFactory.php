<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VoaExample>
 */
class VoaExampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->id();
            // $table->integer('refer_number');
            // $table->date('date_agreement');
            // $table->string('customer');
            // $table->string('service');
            // $table->string('created_by');
            // $table->string('status_voa');
            // $table->timestamps();
            'refer_number' => fake()->randomDigit(4, true),
            'date_agreement' => fake()->dateTimeBetween('2025-01-01', '2025-12-31')->format('Y-m-d'),
            'customer' => fake()->name(),
            'service' => fake()->randomElement(['CORPORATE IDENTITY SERVICE', 'CORPORATE IDENTITY SERVICE PLUS', 'MAILING ADDRESS SERVICE']),
            'created_by' => fake()->name(),
            'status_voa' => fake()->randomElement(['Deal', 'Not deal', 'Renewal', 'Cancel'])

        ];
    }
}
