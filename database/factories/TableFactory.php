<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Table;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Table>
 */
final class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->city,
            'seats' => fake()->numberBetween(1, 5),
            'is_occupied' => fake()->boolean,
        ];
    }
}
