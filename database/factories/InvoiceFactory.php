<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=> $this->faker->randomElement(['internet','electricity']),
            'price'=> rand(1,500),
            'date'=> $this->faker->date(),
            'is_paid'=> $this->faker->randomElement([0,1]),
        ];
    }
}
