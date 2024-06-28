<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ProfesoresController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inicio');
// });



Route::get('/clase-alumno', function () {
    return view('claseAlumno');
});
Route::get('/clase-profesor', function () {
    return view('claseProfesor');
});


//RUTAS ALUMNO
Route::get('/index',[AlumnosController::class, 'index'])->name('index.alumno');
Route::get('/',[AlumnosController::class, 'index'])->name('index.alumno');
Route::get('/registroAlumno',[AlumnosController::class, 'create'])->name('registro.alumno');
Route::get('/inicioAlum',[AlumnosController::class, 'inicio'])->name('inicio.alumno');
Route::post('/storeAlumno',[AlumnosController::class, 'store'])->name('store.alumno');
Route::post('/inicioSesion',[AlumnosController::class, 'login'])->name('login.alumno');

//RUTAS PROFE
Route::get('/registroProfe',[ProfesoresController::class, 'create'])->name('registro.profe');
Route::post('/storeProfe',[ProfesoresController::class, 'store'])->name('store.profesor');
Route::get('/catalogoProfes', [ProfesoresController::class, 'index'])->name('catalogo.profes');
Route::get('/perfilProfe/{nombreprofesor}', [ProfesoresController::class, 'mostrarPerfil'])->name('perfil.profe');
Route::get('/inicioProfe', [ProfesoresController::class, 'inicio'])->name('inicio.profe');


//RUTAS CURSOS
Route::get('/registroCurso',[CursosController::class, 'create'])->name('registro.curso');
Route::post('/storeCurso',[CursosController::class, 'store'])->name('store.curso');
Route::get('/filtro', [CursosController::class, 'index'])->name('cursos.index');


Route::get('/login', function () {
    return view('inicioSesion');
});

//Ruta Admin
Route::get('/admin', [AlumnosController::class, 'admin'])->name('admin.crud');
Route::get('/show/{id}', [AlumnosController::class, 'show'])->name('admin.show');
Route::get('/eliminar/{id}', [AlumnosController::class, 'destroy'])->name('admin.destroy');

