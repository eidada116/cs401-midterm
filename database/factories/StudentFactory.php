<?php

namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Section;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Student::class;
    public function definition(): array
    {
        return [
            'first_name'=>$this->faker->unique()->firstName(),
            'last_name'=>$this->faker->unique()->lastName(),
            'program'=>$this->faker->randomElement(['BSCS', 'BSIT', 'BMMA', 'BSA', 'BSEMC']),
            'enrollment_year'=>$this->faker->year('now'),
            'birthday'=>$this->faker->dateTime(),
            'user_id' => User::factory(),
            'section_id' => Section::inRandomOrder()->first()->id ?? 1,
        ];
    }
}
