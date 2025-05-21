// Controlar el comportamiento del modal
// Este script muestra el modal solo si corresponde y gestiona la preferencia del usuario
document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('loginModal'));

    // Mostrar el modal solo si es necesario
    if (typeof show_login_modal !== 'undefined' && show_login_modal) {
        modal.show();
    }

    // Selecciona el enlace de "Continuar como invitado"
    const enlaceInvitado = document.querySelector('a[onclick*="modalShown"]');
    if (enlaceInvitado) {
        enlaceInvitado.addEventListener('click', function(e) {
            e.preventDefault(); // Evita la recarga inmediata
            localStorage.setItem('modalMostrado', 'true'); // Guardar preferencia en localStorage
            // Guardar cookie por 30 días
            document.cookie = "modalShown=1; path=/; max-age=" + (60*60*24*30);
            modal.hide();
            // Redirigir después de cerrar el modal
            setTimeout(function() {
                window.location.href = enlaceInvitado.getAttribute('href');
            }, 300); // Espera a que el modal se cierre
        });
    }
});
