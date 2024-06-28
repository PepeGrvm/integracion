<?php

namespace Database\Factories;

use App\Alumnos;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnosFactory extends Factory
{
    protected $model = Alumnos::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'paterno' => $this->faker->lastName,
            'materno' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'fecha_nacimiento' => $this->faker->date(),
        ];
    }
}
