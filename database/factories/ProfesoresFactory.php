<?php

namespace Database\Factories;

use App\Profesores;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesoresFactory extends Factory
{
    protected $model = Profesores::class;

    public function definition()
    {
        return  [
            'nombre' => $this->faker->firstName,
            'paterno' => $this->faker->lastName,
            'materno' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'fecha_nacimiento' => $this->faker->date(),
            'titulo' => $this->faker->jobTitle, 
            'universidad' => $this->faker->company, // Puedes usar 'company' para simular una universidad
            'fecha_egreso' => $this->faker->date(),
            'especializacion' => $this->faker->word, // Puedes usar 'word' para simular una especialización
        ];
    }
}
