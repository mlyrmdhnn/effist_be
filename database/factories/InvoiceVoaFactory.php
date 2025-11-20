<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceVoa>
 */
class InvoiceVoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_no' => fake()->randomDigit(),
            'date_invoice' => fake()->dateTimeBetween('2024-01-01', '2025-12-31')->format('Y-m-d'),
            'due_date' => fake()->dateTimeBetween('2024-01-01', '2025-12-31')->format('Y-m-d'),
            'customer' => fake()->company(),
            'status' => fake()->randomElement(['Open', 'Paid'])
        ];
    }
}
