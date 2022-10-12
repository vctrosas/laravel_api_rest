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
            'first_name' => ($first_name = $this->faker->firstname()),
            'last_name' => ($last_name = $this->faker->lastname()),
            'full_name' => $first_name . ' ' . $last_name,
            'job_position' => $this->faker->jobTitle(),
            'age' => $this->faker->unique()->numberBetween(1, 50),
            'birthday' => $this->faker->date(),
        ];
    }
}
