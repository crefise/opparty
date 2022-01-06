<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'will_happen' => $this->faker->dateTimeBetween('now','+5 year'),
            'description' => $this->faker->realTextBetween(10, 50),
            'postponed' => 0,
            'place' => $this->faker->city(), // password
        ];
    }
}
