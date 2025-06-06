<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
Use App\Models\Employer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$50,000 USD'
        ];
    }
}
