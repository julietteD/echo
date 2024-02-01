<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class MemberFactory extends Factory
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
            'name' => $this->faker->lastName(),
            'locationX' => $this->faker->text($maxNbChars = 5),
            'locationY' => $this->faker->text($maxNbChars = 5),
            'link' => $this->faker->url(),
            ];
    }
}
