<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'dni'              => fake()->unique()->numerify('########'),
            'nombres'          => fake()->firstName(),
            'apellidos'        => fake()->lastName() . ' ' . fake()->lastName(),
            'fecha_nacimiento' => fake()->dateTimeBetween('-85 years', '-1 month')
                                        ->format('Y-m-d'),
            'sexo'             => fake()->randomElement(['M', 'F']),
            'telefono'         => fake()->numerify('9########'),
            'direccion'        => fake()->streetAddress(),
        ];
    }
}