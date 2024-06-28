@extends('layout/plantilla')

@section('tituloPagina','Clases Ya!')

@section('contenido')
@extends('layout/navbar')

<h2 id="tituloProfe">Nuestro listado de profesores:</h2>
<div class="containerPro">
    @foreach($dataProf as $dato)
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $dato->nombre }}</h5>
                        <img src="{{ asset('img/2784445.png') }}" class="card-img-top" alt="...">
                    <h6>Titulo: {{$dato->titulo}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" data-bs-toggle="modal" onclick="modalFace()" data-bs-target="#staticBackdrop" class="btn btn-primary">Más Información</a>
                </div>
            </div>
        @endforeach
</div>

@endsection
