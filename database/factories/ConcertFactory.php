<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'day' => $this->faker->text($maxNbChars = 10),
            'hour' => $this->faker->text($maxNbChars = 10),
            'location' => $this->faker->country(),
            'artistId' => $this->faker->randomDigitNotNull(),
            'link' => $this->faker->url(),
        ];
    }
}
