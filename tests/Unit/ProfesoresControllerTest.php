<?php

namespace Tests\Unit;

use App\Profesores;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfesoresControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_inicio_view()
    {
        $response = $this->get(route('inicio.profe'));

        $response->assertStatus(200);
        $response->assertViewIs('inicioProfe');
    }

    /** @test */
    public function it_displays_catalogo_profes_view()
    {
        $profesores = Profesores::factory()->count(3)->create();

        $response = $this->get(route('catalogo.profes'));

        $response->assertStatus(200);
        $response->assertViewIs('catalogoProfes');
        $response->assertViewHas('dataProf', $profesores);
    }

    /** @test */
    public function it_displays_registro_profe_view()
    {
        $response = $this->get(route('registro.profe'));

        $response->assertStatus(200);
        $response->assertViewIs('registroProfe');
    }

    /** @test */
    public function it_stores_a_new_profesor()
    {
        $data = [
            'nombre' => 'Test Nombre',
            'paterno' => 'Test Paterno',
            'materno' => 'Test Materno',
            'fecha_nacimiento' => '1990-01-01',
            'email' => 'test@example.com',
            'password' => 'password',
            'titulo' => 'Test Titulo',
            'universidad' => 'Test Universidad',
            'año_egreso' => '1990-01-01',
            'especializacion' => 'Test Especializacion',
        ];

        $response = $this->post(route('store.profesor'), $data);

        $response->assertRedirect(route('inicio.profe'));
        $this->assertDatabaseHas('profesores', ['email' => 'test@example.com']);
    }

    /** @test */
    public function it_shows_profesor_profile()
    {
        $profesor = Profesores::factory()->create();

        $response = $this->get(route('perfil.profe', ['nombreprofesor' => $profesor->nombre]));

        $response->assertStatus(200);
        $response->assertViewIs('perfilProfe');
        $response->assertViewIs('perfilProfe');
        $response->assertViewHas('profesor', $profesor);
    }
}
