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

document.addEventListener('DOMContentLoaded', function() {
    // --- Lógica de la barra de búsqueda universal ---
    // Busca SIEMPRE en el DOM, no solo en el home
    const searchIcon = document.querySelector('.search-icon');
    const searchBar = document.querySelector('.search-bar');
    
    function toggleSearch() {
        searchBar.classList.toggle('active');
        document.body.classList.toggle('search-active');
        if(searchBar.classList.contains('active')) {
            const input = searchBar.querySelector('input');
            input && input.focus();
        }
    }
    
    if(searchIcon && searchBar) {
        searchIcon.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleSearch();
        });
        document.addEventListener('click', function(e) {
            if(!e.target.closest('.search-container')) {
                searchBar.classList.remove('active');
                document.body.classList.remove('search-active');
            }
        });
        document.addEventListener('keydown', function(e) {
            if(e.key === 'Escape' && searchBar.classList.contains('active')) {
                searchBar.classList.remove('active');
                document.body.classList.remove('search-active');
            }
        });
    }
});

// Script para mostrar automáticamente el año actual en el footer 
// Se obtiene el elemento con ID "year" y se actualiza su contenido
  document.getElementById("year").textContent = new Date().getFullYear();

//Script para manejar la tabla de consultas
$(document).ready(function() {
    // Filtrar consultas
    $('#searchInput').on('keyup', function() {
        const value = $(this).val().toLowerCase();
        $('.consultas-table tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $('#filterSelect').change(function() {
        const filter = $(this).val();
        $('.consultas-table tbody tr').each(function() {
            if (filter === 'all') {
                $(this).show();
            } else {
                const isAnswered = $(this).find('.status-badge').hasClass('answered');
                if ((filter === 'pending' && !isAnswered) || (filter === 'answered' && isAnswered)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        });
    });
});
