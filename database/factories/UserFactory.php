<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Role;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'user_name'=>$this->faker->userName(),
            'password'=>$this->faker->unique()->password(),
            'registration_date'=>$this->faker->dateTime(),
            'role_id' => Role::inRandomOrder()->first()->id ?? 1,
        ];
    }
}
