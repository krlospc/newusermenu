<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsrsPersonas>
 */
class UsrsPersonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->randomElement(['homer','lisa','bart','march','maggy']),
            'paterno' => fake()->randomElement(['simpsons']),
            'materno' => fake()->randomElement(['simpsons']),
            'carnet' => fake()->randomNumber(8, false),
            'complemento' => fake()->randomNumber(2,false),
            'fecha_nacimiento' => now()
        ];
    }
}
