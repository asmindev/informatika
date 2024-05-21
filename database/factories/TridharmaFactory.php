<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tridharma>
 */
class TridharmaFactory extends Factory
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
            'title' => $this->faker->sentence(20),
            'category' => $this->faker->randomElement(['penelitian', 'pengabdian']),
            'year' => $this->faker->numberBetween(2017, 2024),
            'file' => $this->faker->sentence(2),
            'source' => $this->faker->sentence(2),
            'lecturer_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
