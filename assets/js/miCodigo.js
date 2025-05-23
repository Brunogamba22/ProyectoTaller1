// Controlar el comportamiento del modal
// Este script muestra el modal solo si corresponde y gestiona la preferencia del usuario
document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('loginModal'));

    // Mostrar el modal solo si es necesario
    if (typeof show_login_modal !== 'undefined' && show_login_modal) {
        // Solo mostrar si la preferencia NO está guardada
        if (!localStorage.getItem('modalMostrado') && !document.cookie.includes('modalShown=1')) {
            modal.show();
        }
    }

    // Selecciona el enlace de "Continuar como invitado"
    const enlaceInvitado = document.querySelector('a.guest-link');
    if (enlaceInvitado) {
        enlaceInvitado.addEventListener('click', function(e) {
            e.preventDefault(); // Evita la recarga inmediata
            localStorage.setItem('modalMostrado', 'true'); // Guardar preferencia en localStorage
            document.cookie = "modalShown=1; path=/; max-age=" + (60*60*24*30);
            // Redirigir después de cerrar el modal SOLO cuando el modal ya esté oculto
            const handler = function() {
                window.location.href = enlaceInvitado.getAttribute('href');
                document.getElementById('loginModal').removeEventListener('hidden.bs.modal', handler);
            };
            document.getElementById('loginModal').addEventListener('hidden.bs.modal', handler);
            modal.hide();
        });
    }

    // Selecciona el botón de cerrar (X) del modal
    const botonCerrar = document.querySelector('#loginModal .btn-close');
    if (botonCerrar) {
        botonCerrar.addEventListener('click', function() {
            localStorage.setItem('modalMostrado', 'true'); // Guardar preferencia en localStorage
            document.cookie = "modalShown=1; path=/; max-age=" + (60*60*24*30);
            modal.hide(); // Solo cerrar, no redirigir
        });
    }

    // Elimina backdrop si queda colgado
    document.getElementById('loginModal').addEventListener('hidden.bs.modal', function () {
        const backdrop = document.querySelector('.modal-backdrop');
        if (backdrop) {
            backdrop.remove();
            document.body.classList.remove('modal-open');
            document.body.style = '';
        }
    });
});

