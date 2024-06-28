@extends('layout/plantilla')

@section('tituloPagina','Clases Alumno')

@section('contenido')

    <div class="row">
      <div class="col-md-12">
        <div id="meet"></div>
      </div>
    </div>

    <script src="https://meet.jit.si/external_api.js"></script>

    <script src="{{ asset('js/claseAlumno.js') }}"></script>

@endsection
