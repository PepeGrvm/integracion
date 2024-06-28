<?php

namespace App\Http\Controllers;

use App\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $dataCur = Cursos::all();
        $asignaturaSeleccionada = 'ingles';


        return view('filtroCursos', compact('dataCur','asignaturaSeleccionada'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroCurso');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cursos = new Cursos();

        $cursos->titulo = $request->post('titulo');
        $cursos->fecha_inicio = $request->post('fecha_inicio');
        $cursos->fecha_termino = $request->post('fecha_termino');
        $cursos->asignatura = $request->post('asignatura');
        $cursos->descripcion = $request->post('descripcion');
        $cursos->inscritos = $request->post('inscritos');
        $cursos->save();

        return redirect()->route('index.alumno');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cursos $cursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cursos $cursos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cursos $cursos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cursos $cursos)
    {
        //
    }
}
