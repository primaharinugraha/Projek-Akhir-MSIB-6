<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class FinanceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'type' => fake()->randomElement(['asset', 'liability']),
            'value' => fake()->numberBetween($min = 1000, $max = 100000),
            'date' => fake()->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        ];
    }
}
