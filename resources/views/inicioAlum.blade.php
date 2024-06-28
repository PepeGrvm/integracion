@extends('layout/plantilla')
<link href="{{ asset('css/perfilProfe.css') }}" rel="stylesheet">
@section('tituloPagina','Clases Alumno')
@section('contenido')

@extends('layout/navbar')
<section class="section about-section gray-bg" id="about">

    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">Bienvenido (usuario)</h3>
                    <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
                    <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Birthday</label>
                                <p>4th april 1998</p>
                            </div>
                            <div class="media">
                                <label>Age</label>
                                <p>22 Yr</p>
                            </div>
                            <div class="media">
                                <label>Residence</label>
                                <p>Canada</p>
                            </div>
                            <div class="media">
                                <label>Address</label>
                                <p>California, USA</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>info@domain.com</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>820-885-3321</p>
                            </div>
                            <div class="media">
                                <label>Skype</label>
                                <p>skype.0404</p>
                            </div>
                            <div class="media">
                                <label>Freelance</label>
                                <p>Available</p>
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
                        <p class="m-0px font-w-600">Happy Clients</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Project Completed</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                        <p class="m-0px font-w-600">Photo Capture</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                        <p class="m-0px font-w-600">Telephonic Talk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <h1>Proximas clases:</h1>
    <div>
            <div>
                <div class="card" style="width: 18rem;" id="cartota">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item" id="datos-container"></li>
                            <li class="list-group-item" id="datos-container2"></li>
                        </ul> <br>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ¡Unirse a la Sesion!
                        </button>
                        <button class="btn btn-danger" onclick="borrarAgenda()">Denegar</button>
                    </div>
                </div>
            </div>
            <script>
                // Recuperar el valor almacenado en localStorage
                var asignaturaInfo = localStorage.getItem('asignaturaInfo');
                var mensajeInfo = localStorage.getItem('mensajeInfo');


                // Mostrar el valor en el contenedor
                var datosContainer = document.getElementById('datos-container');
                datosContainer.innerHTML = asignaturaInfo;
                var datosContainer2 = document.getElementById('datos-container2');
                datosContainer2.innerHTML = mensajeInfo;
            </script>
    </div>

    <div class="container" style="padding-top: 50px">

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Unete a tu Aula Virtual</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input id="inputIngresoClaseAlum" type="text" class="form-control" placeholder="IDENTIFICADOR" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button onclick="redirigir1()" type="button" class="btn btn-primary">Unirse</button>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>
</section>

<script src="{{ asset('js/claseAlumno.js') }}"></script>
<script src="{{ asset('js/perfilProfe.js') }}"></script>

@endsection
