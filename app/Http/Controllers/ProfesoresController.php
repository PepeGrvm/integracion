<?php

namespace App\Http\Controllers;

use App\Profesores;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicio(){
        return view('inicioProfe');
    }
    public function mostrarPerfil($nombreprofesor)
    {
        // Buscar el profesor por su nombre (suponiendo que el campo en la base de datos sea 'nombre')
        $profesor = Profesores::where('nombre', $nombreprofesor)->firstOrFail();

        // Pasar los datos del profesor a la vista
        return view('perfilProfe', ['profesor' => $profesor]);
    }

    public function index()
    {
        $dataProf = Profesores::all();
        return view('catalogoProfes',compact('dataProf'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroProfe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profesor = new Profesores();

        $profesor->nombre = $request->post('nombre');
        $profesor->paterno = $request->post('paterno');
        $profesor->materno = $request->post('materno');
        $profesor->fecha_nacimiento = $request->post('fecha_nacimiento');
        $profesor->email = $request->post('email');
        $profesor->password = $request->post('password');
        $profesor->titulo = $request->post('titulo');
        $profesor->universidad = $request->post('universidad');
        $profesor->fecha_egreso = $request->post('año_egreso');
        $profesor->especializacion = $request->post('especializacion');
        $profesor->save();

        return redirect()->route('inicio.profe');

    }

    /**
     * Display the specified resource.
     */
    public function show(Profesores $profesores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesores $profesores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesores $profesores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesores $profesores)
    {
        //
    }
}
