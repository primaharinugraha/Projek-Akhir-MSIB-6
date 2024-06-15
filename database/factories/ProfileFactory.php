<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $path = 'media/' . Str::random() . '.png';
        Storage::disk('public')->put($path, file_get_contents("https://i.pravatar.cc/300"));
        return [
            'user_id' => null,
            'name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'job' => fake()->jobTitle(),
            'source_income' => fake()->word(),
            'country' => fake()->country(),
            'last_education' => fake()->word(),
            'postal_code' => fake()->postcode(),
            'address' => fake()->address(),
            'photo_path' => $path,
            'age' => fake()->randomDigit(),
            'married_status' => fake()->randomElement(['Lajang', 'Menikah']),
            'premium' => fake()->boolean(),
        ];
    }
}
