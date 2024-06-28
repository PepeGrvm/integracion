@extends('layout/plantilla')

@section('tituloPagina','Clases Ya!')
<script src="{{ asset('js/login.js') }}"></script>

@section('contenido')
@extends('layout/navbar')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Iniciar Sesión</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login.alumno') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Recordarme</label><br>

                            <input type="checkbox" class="form-check-input" id="eresProfesor" name="eresProfesor">
                            <label class="form-check-label" for="remember">Eres Profesor?</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

                    </form>
                    <button onclick="verificarCheckbox()" type="submit" class="btn btn-primary">Registarse</button>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
