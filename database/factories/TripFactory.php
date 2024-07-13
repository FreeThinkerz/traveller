<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'origin' => $this->faker->city(),
            'destination' => $this->faker->city(),
            'distance' => fake()->numberBetween(1, 200),
            'price' => $this->faker->numberBetween(2, 5) * 1500
        ];
    }
}
