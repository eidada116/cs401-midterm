<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'department' => $this->faker->randomElement([
                'Computer Science',
                'Information Technology',
                'Engineering',
                'Mathematics',
                'Physics',
            ]),
            'birthday'=>$this->faker->date(),
            'user_id' => User::factory(),
        ];
    }
}
