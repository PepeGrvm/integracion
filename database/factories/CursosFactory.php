<?php

namespace Database\Factories;

use App\Cursos;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursosFactory extends Factory
{
    protected $model = Cursos::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->word,
            'fecha_inicio'=> $this->faker->date(),
            'fecha_termino'=> $this->faker->date(),
            'asignatura' => $this->faker->word,
            'descripcion' => $this->faker->word,
            'inscritos' => $this->faker->randomNumber,
        ];
    }
}
