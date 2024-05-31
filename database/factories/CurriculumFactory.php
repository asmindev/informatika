<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curriculum>
 */
class CurriculumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'code' => $this->faker->randomNumber(8),
            'name' => $this->faker->sentence(3),
            'sks' => $this->faker->randomElement([1, 2, 3]),
            'semester' => $this->faker->randomNumber(1),
        ];
    }
}
