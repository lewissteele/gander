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
            'database' => ':memory:',
            'driver' => 'sqlite',
            'host' => fake()->domainName(),
            'password' => fake()->password(),
            'port' => fake()->randomNumber(),
            'username' => fake()->userName(),
        ];
    }
}
