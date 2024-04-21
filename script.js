// Función para cambiar entre el modo claro y oscuro
function toggleDarkMode() {
    // Obtiene el elemento body
    const body = document.body;
    
    // Cambia la clase del body para activar/desactivar el modo oscuro
    body.classList.toggle('dark-mode');
}

// Evento de clic para el botón de alternar modo oscuro
document.getElementById('dark-mode-toggle').addEventListener('click', toggleDarkMode);

