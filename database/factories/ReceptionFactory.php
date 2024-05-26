<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reception>
 */
class ReceptionFactory extends Factory
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
            // $table->integer('capacity');
            // $table->integer('registrant');
            // $table->integer('passed');
            // $table->integer('year');

            'capacity' => $this->faker->numberBetween(100, 180),
            'registrant' => $this->faker->numberBetween(200, 300),
            'passed' => $this->faker->numberBetween(80, 100),
            'year' => $this->faker->numberBetween(2010, 2022),
        ];
    }
}
