<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->string('building');
            // $table->string('name');
            // $table->string('type');
            // $table->string('work_station');
            // $table->string('price');
            // $table->string('status_room');
            'building' => fake()->sentence(rand(1,1)),
            'name' => fake()->name('name'),
            'type' => fake()->randomDigit(5, true),
            'work_station' => fake()->sentence(rand(1,2)),
            'price' => fake()->numberBetween(2000000, 10000000),
            'status_room' => fake()->randomElement(['on', 'off'])
        ];
    }
}
