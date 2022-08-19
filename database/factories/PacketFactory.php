<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(3,true),
            'days' => $this->faker->randomDigitNotNull(),
            'people' => $this->faker->randomDigitNotNull(),
            'price' => $this->faker->randomNumber(5, true),
        ];
    }
}
