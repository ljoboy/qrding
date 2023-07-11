<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Super admin',
                'email' => 'supadmin@qrding.test',
                'password' => Hash::make('password'),
                'role' => RoleEnum::SuperAdmin,
                'phone' => fake()->E164PhoneNumber(),
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin admin',
                'email' => 'admin@qrding.test',
                'password' => Hash::make('password'),
                'role' => RoleEnum::Admin,
                'phone' => fake()->E164PhoneNumber(),
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User user',
                'email' => 'user@qrding.test',
                'password' => Hash::make('password'),
                'role' => RoleEnum::User,
                'remember_token' => Str::random(10),
                'phone' => fake()->E164PhoneNumber(),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
