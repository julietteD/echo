<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class GeneralContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'address' => $this->faker->streetAddress(),
            'linkedinLink' => $this->faker->url(),
            'contactName' => $this->faker->firstname(),
            'contactFunction' => $this->faker->jobTitle(),

        ];

    }
}
