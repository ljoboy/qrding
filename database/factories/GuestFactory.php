<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\GuestType;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Guest>
 */
final class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->E164PhoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'type' => fake()->randomElement(GuestType::getValues()),
        ];
    }
}
