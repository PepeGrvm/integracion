// Ejecuta la función api() cuando la ventana se haya cargado completamente
window.onload = function() {
    api();
};

// Función para llamar a la API de OpenWeatherMap
function api() {
    fetch('https://api.openweathermap.org/data/2.5/weather?q=Santiago,cl&appid=cd3b861fa1d5897fc03a7e3e0253279e')
        .then(response => {
            // Verifica si la respuesta de la red es correcta
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            // Convierte la respuesta a formato JSON
            return response.json();
        })
        .then(data => {
            // Selecciona el botón con id "clima"
            let clima = document.getElementById("clima");
            // Verifica si el elemento existe
            if (clima) {
                // Actualiza el contenido del botón para mostrar la temperatura en grados Celsius
                clima.innerHTML += (data.main.temp - 273.15).toFixed(1) + "°C";
            }
        })
        .catch(error => {
            // Maneja y muestra cualquier error que ocurra durante la llamada a la API
            console.error('There has been a problem with your fetch operation:', error);
        });
}