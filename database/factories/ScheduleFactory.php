<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Models\App\Schedule;
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
            'day_of_week'=>$this->faker->dayOfWeek(),
            'time_slot'=>$this->faker->time(),
            'room'=>$this->faker->numberBetween(100,500),
            'term'=>$this->faker->numberBetween(1,3),
        ];
    }
}
