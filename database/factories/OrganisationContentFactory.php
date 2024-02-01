<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class OrganisationContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text($maxNbChars = 30),
            'intro' => $this->faker->text($maxNbChars = 300),
            'titleBox1' => $this->faker->text($maxNbChars = 30),
            'contentBox1' => $this->faker->text($maxNbChars = 300),
            'titleBox2' => $this->faker->text($maxNbChars = 30),
            'contentBox2' => $this->faker->text($maxNbChars = 300) ];
    }
}
