function agendar(){
    let asignaturaSoli = document.getElementById("asignaturaSoli").value;
    let asignaturaFecha = document.getElementById("asignaturaFecha").value;
    let asignaturaTiempo = document.getElementById("asignaturaTiempo").value;
    let asignaturaComentarios = document.getElementById("asignaturaComentarios").value;
    let nombreSoli = document.getElementById("nombreSoli").value;

    localStorage.setItem('asignatura',asignaturaSoli)
    localStorage.setItem('fecha',asignaturaFecha)
    localStorage.setItem('tiempo',asignaturaTiempo)
    localStorage.setItem('comentarios',asignaturaComentarios)
    localStorage.setItem('nombre',nombreSoli)
    
}

function borrarAgenda(){
    localStorage.removeItem('asignatura')
    localStorage.removeItem('fecha')
    localStorage.removeItem('tiempo')
    localStorage.removeItem('comentarios')
    document.getElementById("cartota").hidden = true;
}

function enviarMsje(){
    let  asignaturaInfo = document.getElementById("asignaturaInfo").value;
    let  mensajeCodigo = document.getElementById("codigoInvitacion").value;

    localStorage.setItem('asignaturaInfo',asignaturaInfo)
    localStorage.setItem('mensajeInfo',mensajeCodigo)
}

