<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room'=>fake()->colorName(),
            'term'=>fake()->random_int(1,3),
            'day_of_week'=>fake()->dayOfWeek(),
            'time_slot'=>fake()->time()
        ];
    }
}
