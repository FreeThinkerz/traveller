<?php

namespace Database\Factories;

use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bus_id' => Bus::factory(),
            'route_id' => Trip::factory(),
            'departure_time' => now(),
            'arrival_time' => now()->addHours(1),
            'price' => $this->faker->numberBetween(2, 5) * 1500,
        ];
    }
}
