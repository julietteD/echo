<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ArtistFactory extends Factory
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
            'bio' => $this->faker->text($maxNbChars = 3000),
            'link1' => $this->faker->url(),
            'link2' => $this->faker->url(),
            'linkFacebook' => $this->faker->url(),
            'linkX' => $this->faker->url(),
            'spotify' => $this->faker->text($maxNbChars = 3000)        ];
    }
}
