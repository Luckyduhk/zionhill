<?php

namespace Database\Factories;

use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'family_id' => Family::factory(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'notes' => fake()->text(),
            'prayer_requests' => fake()->text(),
            'last_visited_date' => fake()->dateTimeBetween('-4 months', 'now')->format('Y-m-d'),
            'clothing_size' => fake()->randomElement(['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL', '4XL']),
            'picture' => fake()->imageUrl(),
        ];
    }
}
