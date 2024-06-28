@extends('layout/plantilla')
<link href="{{ asset('css/perfilProfe.css') }}" rel="stylesheet">

<script src="{{ asset('js/perfilProfe.js') }}"></script>
@section('tituloPagina','Perfil Profesor')

@section('contenido')
@extends('layout/navbar')
<section class="section about-section gray-bg" id="about">

    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">{{ $profesor->nombre }}</h3>
<h6 class="theme-color lead">Diseñador de Experiencia de Usuario (UX) y Diseñador de Interfaz de Usuario (UI) con base en Canadá</h6>
<p>Diseño y desarrollo servicios para clientes de todos los tamaños, especializándome en la creación de sitios web modernos y elegantes, servicios web y tiendas en línea. Mi pasión es diseñar experiencias digitales a través de interfaces audaces e interacciones significativas.</p>
<div class="row about-list">
    <div class="col-md-6">
        <div class="media">
            <label>Fecha de Nacimiento</label>
            <p>4 de abril de 1998</p>
        </div>
        <div class="media">
            <label>Edad</label>
            <p>22 años</p>
        </div>
        <div class="media">
            <label>Residencia</label>
            <p>Canadá</p>
        </div>
        <div class="media">
            <label>Dirección</label>
            <p>California, EE. UU.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="media">
            <label>Correo Electrónico</label>
            <p>info@dominio.com</p>
        </div>
        <div class="media">
            <label>Teléfono</label>
            <p>820-885-3321</p>
        </div>
        <div class="media">
            <label>Skype</label>
            <p>skype.0404</p>
        </div>
        <div class="media">
            <label>Freelance</label>
            <p>Disponible</p>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="about-avatar">
    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
</div>
</div>
</div>
<div class="counter">
<div class="row">
    <div class="col-6 col-lg-3">
        <div class="count-data text-center">
            <h6 class="count h2" data-to="500" data-speed="500">500</h6>
            <p class="m-0px font-w-600">Clientes Satisfechos</p>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="count-data text-center">
            <h6 class="count h2" data-to="150" data-speed="150">150</h6>
            <p class="m-0px font-w-600">Proyectos Completados</p>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="count-data text-center">
            <h6 class="count h2" data-to="850" data-speed="850">850</h6>
            <p class="m-0px font-w-600">Capturas Fotográficas</p>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="count-data text-center">
            <h6 class="count h2" data-to="190" data-speed="190">190</h6>
            <p class="m-0px font-w-600">Llamadas Telefónicas</p>
        </div>
    </div>
</div>
</div>
</div>

</section>
<div>
    <h1>Dias Disponibles:</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Dia</th>
            <th scope="col">Hora</th>
            <th scope="col">Asignatura</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>15/06</td>
            <td>15:00</td>
            <td>Diseño 1</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>18/06</td>
            <td>15:30</td>
            <td>Diseño 2</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>13/07</td>
            <td>15:30</td>
            <td>Colores 2</td>
          </tr>
        </tbody>
      </table></div>
<div>
    <h1>Agenda tu hora!</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Contactar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Comunicate con tu Profesor!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="input-group mb-3">
                    <input id="nombreSoli" placeholder="Nombre Usuario" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <input id="asignaturaSoli" placeholder="Asignatura" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <input id="asignaturaFecha" placeholder="Asignatura" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <input id="asignaturaTiempo" placeholder="Asignatura" type="time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <input id="asignaturaComentarios" placeholder="Comentale a tu profesor sobre que te gustaria ver en la clase!" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button onclick="agendar()" type="button" class="btn btn-primary">Agendar</button>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
