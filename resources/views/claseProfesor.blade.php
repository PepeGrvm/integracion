@extends('layout/plantilla')

@section('tituloPagina','Clases Profesor')

@section('contenido')

<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div id="meet"></div>
      </div>
    </div>
  </section>

    <script src="https://meet.jit.si/external_api.js"></script>

    <script src="{{ asset('js/claseProfesor.js') }}"></script>

@endsection
