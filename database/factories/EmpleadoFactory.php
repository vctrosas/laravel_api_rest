<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstname(),
            'last_name' => $this->faker->lastname(),
            'job_position' => $this->faker->jobTitle(),
            'age' => $this->faker->unique()->numberBetween(1, 50),
            'birthday' => $this->faker->date(),
        ];
    }
}
