<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
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
            // $table->string('title');
            // $table->string("schedule");
            // $table->date("date");

            'title' => $this->faker->sentence(),
            'schedule' => $this->faker->time(),
            'date' => $this->faker->date(),
        ];
    }
}
