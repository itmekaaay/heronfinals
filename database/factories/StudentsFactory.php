<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_number' => fake()->numberBetween(1000, 9999),
            'full_name' => fake()->name(),
            'birthdate' => fake()->unique()->dateTimeBetween('-500 months')->format('m-d-Y'),
        ];
    }
}
