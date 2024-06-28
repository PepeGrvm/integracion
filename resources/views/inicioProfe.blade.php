@extends('layout/plantilla')
<link href="{{ asset('css/perfilProfe.css') }}" rel="stylesheet">
<script src="{{ asset('js/perfilProfe.js') }}"></script>
@section('tituloPagina','Clases Alumno')

@section('contenido')
@extends('layout/navbar')

<section class="section about-section bg-light" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="about-avatar mx-auto mb-4">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid rounded-circle" alt="Avatar">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="about-text">
                    <h2 class="dark-color mb-3">Bienvenido</h2>
                    <h5 class="theme-color mb-4">Lead UX & UI Designer</h5>
                    <p class="text-muted">I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services, and online stores. My passion is to design digital user experiences through bold interfaces and meaningful interactions.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li><strong>Birthday:</strong> 4th April 1998</li>
                                <li><strong>Age:</strong> 22 Yrs</li>
                                <li><strong>Residence:</strong> Canada</li>
                                <li><strong>Address:</strong> California, USA</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li><strong>Email:</strong> info@domain.com</li>
                                <li><strong>Phone:</strong> 820-885-3321</li>
                                <li><strong>Skype:</strong> skype.0404</li>
                                <li><strong>Freelance:</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 rounded shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h2 class="count mb-0">500</h2>
                        <p class="font-weight-bold text-uppercase">Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 rounded shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h2 class="count mb-0">150</h2>
                        <p class="font-weight-bold text-uppercase">Projects Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 rounded shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h2 class="count mb-0">850</h2>
                        <p class="font-weight-bold text-uppercase">Photo Captures</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 rounded shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h2 class="count mb-0">190</h2>
                        <p class="font-weight-bold text-uppercase">Telephonic Talks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container py-5" id="cartota">
        <h2 class="mb-4">Solicitudes de Clases</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="card-img-top" alt="Avatar">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><strong>Comentarios del Alumno:</strong> <span id="datos-container4"></span></li>
                            <li><strong>Fecha:</strong> <span id="datos-container"></span></li>
                            <li><strong>Hora:</strong> <span id="datos-container2"></span></li>
                            <li><strong>Asignatura:</strong> <span id="datos-container3"></span></li>
                        </ul>
                        <button type="button" class="btn btn-success btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Enviar Invitación</button>
                        <button class="btn btn-danger btn-sm mt-3" onclick="borrarAgenda()">Denegar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Próximas Clases</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Día</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Enviar Invitación</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Enviar Invitación</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Enviar Invitación</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container py-5">
        <h2 class="mb-4">Crear Sesión</h2>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crea tu Aula Virtual</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="{{ Illuminate\Support\Str::random(9) }}" aria-label="Disabled input example" disabled>
                            <button class="btn btn-outline-success" type="button" onclick="copiarTexto()">Copiar Identificador</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Entrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Crear Curso</h2>
        <a href="registroCurso" class="btn btn-primary">Registrar tu Curso</a>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Comencemos la clase!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="inputIngresoClase" placeholder="IDENTIFICADOR" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="redirigir()">Comenzar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Comunicate con tu Alumno!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input type="text" id="asignaturaInfo" class="form-control" placeholder="Asignatura">
                </div>
                <div class="mb-3">
                    <input type="text" id="codigoInvitacion" class="form-control" placeholder="Codigo de Invitación">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="enviarMsje()">Agendar</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/claseProfesor.js') }}"></script>

@endsection
