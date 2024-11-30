let tiempoRestante = parseInt(sessionStorage.getItem('tiempoRestante')) || 60; // Usar el valor de sessionStorage o 60 si es la primera vez.
const temporizadorElemento = document.getElementById('temporizador');

function actualizarTemporizador() {
    if (tiempoRestante > 0) {
        tiempoRestante--;
        sessionStorage.setItem('tiempoRestante', tiempoRestante); // Guardar el tiempo restante en sessionStorage.
        temporizadorElemento.textContent = 'Tiempo restante: ' + tiempoRestante + ' segundos';
    } else {
        clearInterval(intervalo); // Detener el temporizador.
        // Mostrar el resultado en la misma página.
        document.getElementById('resultado').style.display = 'block'; // Mostrar el contenedor de resultados.
    }
}

const intervalo = setInterval(actualizarTemporizador, 1000);

window.addEventListener('beforeunload', function() {
    // Guardar el tiempo restante cuando el usuario sale de la página.
    sessionStorage.setItem('tiempoRestante', tiempoRestante);
});