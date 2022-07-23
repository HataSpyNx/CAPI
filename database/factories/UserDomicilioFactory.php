<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'domicilio' => fake()->streetAddress(),
            'numero_exterior' => 5,
            'colonia' => Str::random(10),
            'cp' => fake()->randomNumber(5, true),
            'ciudad' => fake()->city()
        ];
    }
}
