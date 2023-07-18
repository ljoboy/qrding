<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Party;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Party>
 */
final class PartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->jobTitle,
            'start_time' => fake()->dateTimeBetween('now', '+1 week'),
            'duration' => fake()->numberBetween(60, 6000),
        ];
    }
}
