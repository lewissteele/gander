<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Database>
 */
class DatabaseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'driver' => 'sqlite',
            'hostname' => fake()->domainName(),
            'username' => fake()->userName(),
            'password' => fake()->password(),
            'port' => fake()->randomNumber(),
        ];
    }
}
