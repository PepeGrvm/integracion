@extends('layout/plantilla')

@section('tituloPagina','Clases Ya!')
<script src="{{ asset('js/filtroCurso_Clase.js') }}"></script>

@section('contenido')
@extends('layout/navbar')

<div class="container" style="padding-top: 80px;">
    <h3 style="font-weight: bold;">Estudia con profesores de calidad</h3>
    <br>
    <div class="input-group mb-3">
        <input id="filtrarAsignatura" type="text" class="form-control" placeholder="¿Qué aprendemos hoy?" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" id="button-addon2" onclick="filtrar()">Buscar</button>
    </div>
</div>



@foreach($dataCur as $dato)
@if( $dato->asignatura == $asignaturaSeleccionada)
    <h1 style="padding-top: 50px">Cursos Destacados de {{ $dato->asignatura }}</h1>
    <div class="card" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $dato->titulo }}</h5>
            <img src="{{ asset('img/excel-logo-0.png') }}" class="card-img-top" alt="...">
            <h6>Titulo: {{$dato->asignatura}}</h6>
            <p class="card-text">Descripcion:</p>
            <a href="#" data-bs-toggle="modal" onclick="modalFace()" data-bs-target="#staticBackdrop" class="btn btn-primary">Más Información</a>
        </div>
    </div>
@endif
@endforeach

<br>
<br>
<h2 id="tituloProfe">Cursos que te podrian Interesar</h2>
<div class="containerPro">
    @foreach($dataCur as $dato)
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $dato->titulo }}</h5>
                        <img src="{{ asset('img/excel-logo-0.png') }}" class="card-img-top" alt="...">
                    <h6>Titulo: {{$dato->asignatura}}</h6>
                    <p class="card-text">Descripcion:</p>
                    <a href="#" data-bs-toggle="modal" onclick="modalFace()" data-bs-target="#staticBackdrop" class="btn btn-primary">Más Información</a>
                </div>
            </div>
    @endforeach
</div>

<!-- Estructura de la modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Pepito Carrion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenido de la modal -->
                <img src="{{ asset('img/2784445.png') }}" style="width: 200px" class="card-img-top" alt="...">
                <p style="padding: 10px">Hola, soy un apasionado profesor de matemáticas con una sólida formación académica y experiencia en la enseñanza. Con más de 7 años de experiencia, he trabajado con estudiantes de diversos niveles académicos, desde principiantes hasta avanzados.</p>

                <p style="padding: 10px">Mis horarios son flexibles, y estoy comprometido a trabajar con los estudiantes para encontrar horarios que se adapten a sus necesidades. Por clase $25.000</p>
                <p style="padding-left: 10px">Metodos de contacto</p>
                <p style="padding-left: 10px">Fono: +56 9 12345678 <br> Email: Pepito@Carrion.cl <br> Linkedin: @PepitoProfe123</p>
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                <a href="perfilProfe"><button type="button" class="btn btn-primary">Contactar</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
