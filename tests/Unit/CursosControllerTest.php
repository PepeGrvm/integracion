<?php

namespace Tests\Unit;

use App\Cursos;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CursosControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_registro_curso_view()
    {
        $response = $this->get(route('registro.curso'));

        $response->assertStatus(200);
        $response->assertViewIs('registroCurso');
    }

    /** @test */
    public function it_stores_a_new_curso()
    {
        $data = [
            'titulo' => 'Curso de Inglés',
            'fecha_inicio' => '2024-07-01',
            'fecha_termino' => '2024-08-01',
            'asignatura' => 'ingles',
            'descripcion' => 'Descripción del curso de inglés',
            'inscritos' => 0,
        ];

        $response = $this->post(route('store.curso'), $data);

        $response->assertRedirect(route('index.alumno'));
        $this->assertDatabaseHas('cursos', ['titulo' => 'Curso de Inglés']);
    }

    /** @test */
    public function it_displays_filtro_cursos_view_with_data()
    {
        $cursos = Cursos::factory()->count(3)->create();

        $response = $this->get(route('cursos.index'));

        $response->assertStatus(200);
        $response->assertViewIs('filtroCursos');
        $response->assertViewHas('dataCur', $cursos);
        $response->assertViewHas('asignaturaSeleccionada', 'ingles');
    }
}
