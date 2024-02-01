<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'picture' => $this->faker->text($maxNbChars = 30),
            'title' => $this->faker->lastName(),
            'intro' => $this->faker->text($maxNbChars = 30),
            'titleBox1' => $this->faker->text($maxNbChars = 30),
            'contentBox1' => $this->faker->text($maxNbChars = 30),
            'titleBox2' => $this->faker->text($maxNbChars = 30),
            'contentBox2' => $this->faker->text($maxNbChars = 30)
       ];
    }
}
