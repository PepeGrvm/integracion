function verificarCheckbox() {

    var checkbox = document.getElementById("eresProfesor");

    // Verificar si el checkbox está seleccionado
    if (checkbox.checked) {
      // Si está seleccionado, redirigir a una página
        window.location.href = "registroProfe";
    } else {
      // Si no está seleccionado, redirigir a otra página
      window.location.href = "registroAlumno";
    }
  }
