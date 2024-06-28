@extends('layout/plantilla')

@section('tituloPagina','Crea Tu Curso')

@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Nuevo Curso</div>
                <div class="card-body">
                    <form action="{{ route('store.curso') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Titulo</label>
                            <input type="text" class="form-control" name="titulo" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" required>
                        </div>

                        <div class="mb-3">
                            <label for="asignatura" class="form-label">Asignatura</label>
                            <select class="form-control" name="asignatura" id="asignatura" required>
                                <option value="ingles">Inglés</option>
                                <option value="matematicas">Matemáticas</option>
                                <option value="historia">Historia</option>
                                <option value="biologia">Biología</option>
                                <option value="otros">Otra</option>
                            </select>
                        </div>

                        <!-- Campo de texto para asignatura "OTROS" -->
                        <div class="mb-3" id="otrosAsignatura" style="display: none;">
                            <label for="otra_asignatura" class="form-label">Escribe tu asignatura</label>
                            <input type="text" class="form-control" name="otra_asignatura" id="otra_asignatura">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Fecha de Inicio</label>
                            <input type="date" class="form-control" name="fecha_inicio" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Fecha de termino</label>
                            <input type="date" class="form-control" name="fecha_termino" required>
                        </div>

                        <button type="submit" class="btn btn-primary" style="margin-top: 20px" >Crear</button>
                    </form>

                    <a href="{{ route ("index.alumno") }}">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript para mostrar/ocultar el campo de texto cuando se selecciona "OTROS"
    document.getElementById('asignatura').addEventListener('change', function () {
        var otrosAsignatura = document.getElementById('otrosAsignatura');
        if (this.value.toLowerCase() === 'otros') {
            otrosAsignatura.style.display = 'block';
        } else {
            otrosAsignatura.style.display = 'none';
        }
    });
</script>
@endsection
