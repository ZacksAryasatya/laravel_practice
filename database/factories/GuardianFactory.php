<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'grade' => $this->faker->randomElement(['11 PPLG 1', '11 PPLG 2']),
            'address' => $this->faker->city(),
        ];
    }
}
