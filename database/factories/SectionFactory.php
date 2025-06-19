<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'subject' => $this->faker->randomElement([
                'Intro to Programming',
                'Data Structures',
                'Database Systems',
                'Web Development',
                'Computer Networks'
            ]),
            'course_code' => strtoupper($this->faker->bothify('CS###')),
            'credits' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->sentence(),
        ];
    }
}
