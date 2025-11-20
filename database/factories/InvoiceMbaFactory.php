<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvoiceMbaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_no' => fake()->randomDigit(7, true),
            'date_invoice' => fake()->dateTimeBetween('2024-01-01', '2025-12-31')->format('Y-m-d'),
            'due_date' => fake()->dateTimeBetween('2024-01-01', '2025-12-31')->format('Y-m-d'),
            'customer' => fake()->name(),
            'status' => fake()->randomElement(['Open', 'Paid', 'Terminate']),
        ];
    }
}
