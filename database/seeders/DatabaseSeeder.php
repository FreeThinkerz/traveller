<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Schedule;
use App\Models\Trip;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $cities = collect(['douala', 'buea', 'yaounde', 'nkongsamba']);

        $cities->each(
            function ($city, $key) use ($cities) {
                Trip::factory()
                    ->has(
                        Schedule::factory()
                            ->count(5)
                            ->has(
                                Reservation::factory()->count(rand(20, 30))
                            )
                    )
                    ->create(['origin' => $city, 'destination' => $cities->filter(fn ($c) => $c !== $city)->random()]);
            }
        );


    }
}
