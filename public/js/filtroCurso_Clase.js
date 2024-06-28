function getAsignaturaFiltro() {
    return localStorage.getItem('asignatura');
}

function setAsignaturaFiltro(asignatura) {
    localStorage.setItem('asignatura', asignatura);
}

function filtrar() {
    var identificador = document.getElementById("filtrarAsignatura").value;
    console.log(identificador);

    if (identificador.trim() !== '') {
        setAsignaturaFiltro(identificador);

        window.location.href = 'filtro'; // Corrected this line
    } else {
        alert("Please enter a room name.");
    }
}
