<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuarios>
 */
class usuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->lastName(),
            'email'=>$this->faker->unique()->email,
            'password'=>$this->faker->colorName(),
            'direccion'=>$this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'telefono'=>$this->faker->phoneNumber(),
            'fecha_nac'=>$this->faker->date('Y-m-d')
        ];
    }
}
