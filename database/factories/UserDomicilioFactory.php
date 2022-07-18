<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->streetAddress,
            'numero_exterior' => $this->faker->numberBetween(1, 100),
            'colonia' => $this->faker->city,
            'cp' => $this->faker->numberBetween(00001, 99999),
            'ciudad' => $this->faker->city,
            'fecha_nacimiento' => $this->faker->dateTimeBetween('-60 years', '-18 years'),
        ];
    }
}
