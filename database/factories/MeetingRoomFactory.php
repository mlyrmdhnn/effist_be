<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MeetingRoom>
 */
class MeetingRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'building' => fake()->randomElement(['Kota Kasablanka Tower', 'Gandaria 8 Office Tower']),
          'meeting_room' => fake()->sentence(rand(2,4)),
          'type' => fake()->randomElement(['Person', 'Full Day']),
          'price' => fake()->numberBetween(500000, 5000000)
        ];
    }
}
