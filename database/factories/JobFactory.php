<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50 000', '$100 000', '$150 000', '$200 000']),
            'location' => fake()->randomElement(['Remote', 'On Site', 'Hybrid']),
            'job_type' => fake()->randomElement(['Full Time', 'Part Time', 'Contract']),
            'url' => fake()->url,
            'featured' => false,
            'employer_id' => Employer::factory(),


        ];
    }
}
