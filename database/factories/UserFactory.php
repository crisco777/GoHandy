<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Sex;
use App\Models\Town;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sexes = Sex::pluck('id');
        $roles = Role::pluck('id');
        $towns = Town::pluck('id');


        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'age' => fake()->numberBetween(10, 50),
            'email' => fake()->unique()->safeEmail(),
            'contact' => fake()->phoneNumber(),
            'sex_id' => $sexes->random(),
            'role_id' => $roles->random(),
            'town_id'=> $towns->random(),
            'address' => fake()->streetAddress(),
            'email_verified_at' => now(),
            'password' => 'password',
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
