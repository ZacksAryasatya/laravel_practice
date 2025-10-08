<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['Mapel Database', 'IOT', 'Mobile Development', 'Web Development', 'Game Development']),
            'description' => fake()->unique()->randomElement(['Mata pelajaran yang mempelajari tentang basis data dan manajemen data.', 'Mata pelajaran yang mempelajari tentang Internet of Things (IoT) dan aplikasinya.', 'Mata pelajaran yang mempelajari tentang pengembangan aplikasi mobile untuk berbagai platform.', 'Mata pelajaran yang mempelajari tentang pengembangan aplikasi web dan teknologi terkait.', 'Mata pelajaran yang mempelajari tentang pengembangan game dan desain interaktif.'])
        ];
    }
}
