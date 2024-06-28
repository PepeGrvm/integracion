<?php

namespace Tests\Unit;

use App\Alumnos;
use App\Profesores;
use App\Cursos;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlumnosControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_admin_view_with_data()
    {
        $alumnos = Alumnos::factory()->count(3)->create();
        $profesores = Profesores::factory()->count(3)->create();

        $response = $this->get(route('admin.crud'));

        $response->assertStatus(200);
        $response->assertViewHas('dataAlum', $alumnos);
        $response->assertViewHas('dataProf', $profesores);
    }

    /** @test */
    public function it_redirects_to_correct_route_on_login()
    {
        $alumno = Alumnos::factory()->create(['email' => 'alumno@example.com']);
        $profesor = Profesores::factory()->create(['email' => 'profesor@example.com']);

        $response = $this->post(route('login.alumno'), ['email' => 'alumno@example.com']);
        $response->assertRedirect(route('inicio.alumno'));

        $response = $this->post(route('login.alumno'), ['email' => 'profesor@example.com']);
        $response->assertRedirect(route('inicio.profe'));

        $response = $this->post(route('login.alumno'), ['email' => 'otro@example.com']);
        $response->assertRedirect(route('index.alumno'));
    }

    /** @test */
    public function it_displays_index_view_with_data()
    {
        $alumnos = Alumnos::factory()->count(3)->create();
        $profesores = Profesores::factory()->count(3)->create();
        $cursos = Cursos::factory()->count(3)->create();

        $response = $this->get(route('index.alumno'));

        $response->assertStatus(200);
        $response->assertViewHas('dataAlum', $alumnos);
        $response->assertViewHas('dataProf', $profesores);
        $response->assertViewHas('dataCur', $cursos);
    }

    /** @test */
    public function it_can_store_a_new_alumno()
    {
        $data = [
            'nombre' => 'Test Nombre',
            'paterno' => 'Test Paterno',
            'materno' => 'Test Materno',
            'email' => 'test@example.com',
            'password' => 'password',
            'fecha_nacimiento' => '2000-01-01',
        ];

        $response = $this->post(route('store.alumno'), $data);

        $response->assertRedirect(route('inicio.alumno'));
        $this->assertDatabaseHas('alumnos', ['email' => 'test@example.com']);
    }
}
