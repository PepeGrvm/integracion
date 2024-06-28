@extends('layout/plantilla')

@section('tituloPagina','Registrate')

@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registro</div>
                <div class="card-body">
                    <form action="{{ route('store.alumno') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="paterno" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="materno" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px" >Registrarse</button>
                    </form>

                    <a href="{{ route ("index.alumno") }}">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
