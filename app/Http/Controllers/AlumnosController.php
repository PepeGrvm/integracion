<?php

namespace App\Http\Controllers;

use App\Alumnos;
use App\Cursos;
use App\Profesores;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin(){
        $dataAlum = Alumnos::all();
        $dataProf = Profesores::all();
        return view('admin',compact('dataAlum','dataProf'));
    }


    public function login(Request $request)
    {
        $emailInput = $request->input('email');
        $alumno = Alumnos::where('email', $emailInput)->first();
        $profes = Profesores::where('email', $emailInput)->first();
        if($alumno){
            return redirect()->route('inicio.alumno');
        } else {
        if($profes){
            return redirect()->route('inicio.profe');
        }else{
            return redirect()->route('index.alumno');

        }
        }
    }

    public function inicio(){
        return view('inicioAlum');
    }
    public function index(Request $request)
    {
        $dataAlum = Alumnos::all();
        $dataProf = Profesores::all();
        $dataCur = Cursos::all();

        $filtro = $request->input("buscarAsigna");

        $datos = Cursos::where('campo1','like','%$filtro%');

        return view('index',compact('dataAlum','dataProf', 'dataCur','datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroAlumno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumnos = new Alumnos();

        $alumnos->nombre = $request->post('nombre');
        $alumnos->paterno = $request->post('paterno');
        $alumnos->materno = $request->post('materno');
        $alumnos->email = $request->post('email');
        $alumnos->password = $request->post('password');
        $alumnos->fecha_nacimiento = $request->post('fecha_nacimiento');
        $alumnos->save();

        return redirect()->route('inicio.alumno');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dataAlum = Alumnos::find($id);
        $dataProf = Profesores::find($id);
        return view('adminEliminar',compact('dataAlum','dataProf'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
