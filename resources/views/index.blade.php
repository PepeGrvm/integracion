@extends('layout/plantilla')

@section('tituloPagina','Clases Ya!')

@section('contenido')
<script src="{{ asset('js/filtroCurso_Clase.js') }}"></script>
<script src="{{ asset('js/clima.js') }}"></script>

@extends('layout/navbar')
    <!-- Botón para mostrar el clima -->
    <li>
        <button id="clima" class="btn btn-outline-primary">Clima Santiago de Chile: </button>
    </li>

<div class="container" style="padding-top: 80px;">
    <h3 style="font-weight: bold;">Estudia con profesores de calidad</h3>
    <br>
    <h6>👨‍🎓 Porfesores Certificados</h6>
    <h6>🤝 Primera clase totalmente gratis</h6>
    <h6>🧑‍💻 Clases totalmente personalizadas</h6>
    <h6>🕺 Para todos los niveles</h6>

    <div class="container" style="padding-top: 80px;">
        <div class="input-group mb-3">
            <input id="filtrarAsignatura" type="text" class="form-control" placeholder="¿Qué aprendemos hoy?" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-primary" type="button" id="button-addon2" onclick="filtrar()">Buscar</button>
        </div>
    </div>

<div class="containerMaterias" style="padding: 90PX;">
    <h4>Nuestra Sección de Materias</h4>
    <br>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" >
        <div class="carousel-inner">
          <div class="carousel-item active" id="carruselMat">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/artturi-jalli-gYrYa37fAKI-unsplash.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ecuaciones</h5>
                <a href="../matematicas" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/board-3695072_1280.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Estadistica</h5>
                <a href="../matematicas" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/excel-logo-0.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Excel</h5>
                <a href="../matematicas" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>
        </div>

        <div class="carousel-item" id="carruselIng">

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/language-course-icon-vector.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ingles B1</h5>
                <a href="../ingles" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/language-course-icon-vector.jpg') }}"  class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ingles B2</h5>
                <a href="../ingles" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/language-course-icon-vector.jpg') }}"  class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ingles C1</h5>
                <a href="../ingles" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>
        </div>

        <div class="carousel-item" id="carruselPf">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Nutricionista</h5>
                <a href="../profesores" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Preparador Fisico</h5>
                <a href="../profesores" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Educación Fisica</h5>
                <a href="../profesores" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


</div>

<h2 id="tituloProfe">Profesores más recientes</h2>
<div class="containerPro">
    @foreach($dataProf as $dato)
        <div class="card" style="width: 16rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $dato->nombre }}</h5>
                <img src="{{ asset('img/2784445.png') }}" class="card-img-top" alt="...">
                <h6>Titulo: {{$dato->titulo}}</h6>
                <p class="card-text">Descripcion: </p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $dato->id }}" class="btn btn-primary">Más Información</a>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop{{ $dato->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{ $dato->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel{{ $dato->id }}">{{ $dato->nombre }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/2784445.png') }}" style="width: 200px" class="card-img-top" alt="...">
                        <p style="padding: 10px">Hola, soy un apasionado profesor de matemáticas con una sólida formación académica y experiencia en la enseñanza. Con más de 7 años de experiencia, he trabajado con estudiantes de diversos niveles académicos, desde principiantes hasta avanzados.</p>
                        <p style="padding: 10px">Mis horarios son flexibles, y estoy comprometido a trabajar con los estudiantes para encontrar horarios que se adapten a sus necesidades. Por clase $25.000</p>
                        <p style="padding-left: 10px">Metodos de contacto</p>
                        <p style="padding-left: 10px">Fono: +56 9 12345678 <br> Email: {{ $dato->email }} <br> Linkedin: @PepitoProfe123</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="{{ route('perfil.profe', ['nombreprofesor' => $dato->nombre]) }}" class="btn btn-primary">Contactar</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>



<div class="container" style="padding-top: 90px;">
    <h3>¿Qué Aprendemos hoy?</h3>
    <div class="container" style="padding: 20px;">
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a>
        <a href="../ingles"><button class="btn btn-outline-primary"style="margin: 5px">Ingles</button></a>
    </div>
</div>


<div class="container" style="padding-top: 40px;">
    <h3>¿Por qué clases YA!?</h3>
    <p>
        Las clases online ofrecen una serie de ventajas significativas que hacen que la opción de "Clases Ya" sea una elección inteligente y conveniente. En primer lugar, la flexibilidad es clave. Con "Clases Ya", los estudiantes tienen la posibilidad de acceder a lecciones desde la comodidad de su hogar o cualquier lugar con conexión a internet, lo que elimina las barreras geográficas y optimiza el tiempo de aprendizaje.</p>
</div>

<hr>
<div>
<!-- API MAPA 
********************************
Esta API de Google Maps permite incrustar un mapa en una página web utilizando un iframe. 
El mapa muestra la ubicación de la sede San Joaquín del Duoc UC en Santiago, Chile. 


Parámetros del URL
********************************
width: Ancho del iframe en píxeles. En este caso, es 600.
height: Altura del iframe en píxeles. En este caso, es 450.
style: Estilos CSS aplicados al iframe. Aquí, border:0; elimina el borde.
allowfullscreen: Permite que el iframe se muestre en pantalla completa.
loading: Especifica cómo se carga el iframe. lazy indica que se carga de forma diferida.
referrerpolicy: Política de referencia para el iframe. no-referrer-when-downgrade significa que no se enviará el encabezado Referer si la navegación es desde HTTPS a HTTP.
-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.0498282973904!2d-70.61886772500554!3d-33.50008070005431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d00be4a5fa81%3A0xcd8eaf5b1d547f64!2sDuoc%20UC%3A%20Sede%20San%20Joaqu%C3%ADn!5e0!3m2!1ses!2scl!4v1720975127599!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</body>
<script> function buscar(){
    var name = document.getElementById("buscarAsigna").value;
    var asig = ['ingles',
                'matematicas',
                'historia']
    if (asig.includes(name)) {
        window.location.href = "../"+name;
    }
}
function modalFace() {
        // Activa la modal al hacer clic en el enlace
        $('#staticBackdrop').modal('show');
    }
</script>
@endsection
