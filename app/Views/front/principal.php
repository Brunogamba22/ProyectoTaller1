<!-- Modal para invitación a registrarse/iniciar sesión -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 overflow-hidden">
            <!-- Cabecera con gradiente dorado -->
            <div class="modal-header border-0" style="background: linear-gradient(135deg, var(--marron-oscuro) 0%, var(--dorado) 100%);">
                <div class="w-100 text-center position-relative">
                    <h5 class="modal-title text-white mb-0 fw-bold">¡Bienvenido a UMMA!</h5>
                    <button type="button" class="btn-close btn-close-white position-absolute end-0 top-50 translate-middle-y" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            
            <div class="modal-body p-4" style="background-color: var(--crema);">
                <!-- Icono moderno -->
                <div class="text-center mb-4">
                    <div class="icon-circle mb-3" style="background: linear-gradient(135deg, var(--dorado) 0%, var(--marron-claro) 100%);">
                        <i class="bi bi-person-fill text-white" style="font-size: 2rem;"></i>
                    </div>
                    <p class="mb-4" style="color: var(--texto-oscuro);">Para disfrutar de una experiencia personalizada y realizar compras, te recomendamos:</p>
                </div>
                
                <!-- Botones con efecto hover moderno -->
                <div class="d-grid gap-3">
                    <a href="<?= base_url('login') ?>" class="btn btn-login btn-lg rounded-pill py-3">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Iniciar sesión
                    </a>
                    <a href="<?= base_url('Registrarse') ?>" class="btn btn-register btn-lg rounded-pill py-3">
                        <i class="bi bi-person-plus me-2"></i> Crear cuenta
                    </a>
                </div>
                
                <!-- Enlace invitado con transición suave -->
                <div class="text-center mt-4">
                    <a href="<?= base_url('principal') ?>" class="guest-link" data-bs-dismiss="modal" onclick="localStorage.setItem('modalShown', 'true')">
                        Continuar como invitado
                    </a>
                </div>
            </div>
            
            <!-- Footer con texto pequeño -->
            <div class="modal-footer justify-content-center border-0 pt-0" style="background-color: var(--crema);">
                <small class="text-muted" style="color: var(--marron-claro) !important;">Al registrarte aceptas nuestros 
                    <a href="TerminoYcondiciones" class="text-decoration-underline" style="color: var(--dorado);">Términos y Condiciones</a>
                </small>
            </div>
        </div>
    </div>
</div>

<!-- Sección: Carrusel de imágenes con texto superpuesto -->
<section class="container-fluid px-0 mb-5 position-relative">
  
  <!-- Carrusel Bootstrap -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Contenedor de las imágenes del carrusel -->
    <div class="carousel-inner">

      <!-- Primera imagen del carrusel (activo por defecto) -->
      <div class="carousel-item active">
        <img src="assets/img/Carrusel1.jpg" class="d-block w-100" alt="modelo 1">
      </div>

      <!-- Siguientes imágenes -->
      <div class="carousel-item">
        <img src="assets/img/Carrusel2.jpg" class="d-block w-100" alt="modelo 2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/Carrusel3.jpg" class="d-block w-100" alt="modelo 3">
      </div>
      <div class="carousel-item">
        <img src="assets/img/Carrusel4.jpg" class="d-block w-100" alt="modelo 4">
      </div>
      <div class="carousel-item">
        <img src="assets/img/Carrusel5.jpg" class="d-block w-100" alt="modelo 5">
      </div>

    </div>

    <!-- Texto superpuesto sobre el carrusel -->
    <div class="overlay-text">
      <h2 class="titulo-carrusel">Bienvenidos a UMMA</h2>
      <p class="subtitulo-carrusel">Moda urbana al mejor precio. ¡Descubrí nuestras colecciones!</p>
    </div>

    <!-- Controles de navegación (adelante/atrás) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>

  </div>

</section>

<!-- Sección: Categorías destacadas -->
<section class="container mb-5">
  
  <!-- Título principal de la sección -->
  <h2 class="text-center mb-4" style="color: var(--texto-oscuro); font-size: 2rem; position: relative; padding-bottom: 10px;">
    Nuestras Categorías
    <!-- Línea dorada decorativa debajo del título -->
    <span style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 80px; height: 3px; background-color: var(--dorado);"></span>
  </h2>

  <!-- Grid de tarjetas de categorías (3 columnas en desktop, 1 en móvil) -->
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Tarjeta de categoría: Remeras -->
    <div class="col">
      <a href="<?= base_url('Remeras') ?>" class="text-decoration-none text-dark">
        <div class="card h-100 text-center shadow-sm card-categoria">
          <div class="card-img-container">
            <img src="assets/img/Remeras/RemeraArenaOversize.webp" class="card-img-top" alt="Remeras">
          </div>
          <div class="card-body">
            <h5 class="card-title">Remeras</h5>
            <p class="card-text">Comodidad y estilo para el día a día. Modelos para todas las edades.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Tarjeta de categoría: Buzos -->
    <div class="col">
      <a href="<?= base_url('Buzos') ?>" class="text-decoration-none text-dark">
        <div class="card h-100 text-center shadow-sm card-categoria">
          <div class="card-img-container">
            <img src="assets/img/Buzos/Buzo1_CanguroNegro.webp" class="card-img-top" alt="Buzos">
          </div>
          <div class="card-body">
            <h5 class="card-title">Buzos</h5>
            <p class="card-text">Elegí los clásicos que nunca fallan. ¡Ideales para todo el año!</p>
          </div>
        </div>
      </a> 
    </div>

    <!-- Tarjeta de categoría: Calzados -->
    <div class="col">
      <a href="<?= base_url('Calzado') ?>" class="text-decoration-none text-dark">
        <div class="card h-100 text-center shadow-sm card-categoria">
          <div class="card-img-container">
            <img src="assets/img/Calzado/JordanRetro1.webp" class="card-img-top" alt="Zapatillas">
          </div>
          <div class="card-body">
            <h5 class="card-title">Calzados</h5>
            <p class="card-text">Perfectas para los días de calor. Cómodas y con mucha onda.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Tarjeta de categoría: Camisas -->
    <div class="col">
      <a href="<?= base_url('Camisas') ?>" class="text-decoration-none text-dark">
        <div class="card h-100 text-center shadow-sm card-categoria">
          <div class="card-img-container">
            <img src="assets/img/Camisas/Camisa2_MaoCamel.png" class="card-img-top" alt="Camisas">
          </div>
          <div class="card-body">
            <h5 class="card-title">Camisas</h5>
            <p class="card-text">Perfectas para ir elegante a todos lados. Cómodas y super facheras.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Tarjeta de categoría: Camperas -->
    <div class="col">
      <a href="<?= base_url('Camperas') ?>" class="text-decoration-none text-dark">
        <div class="card h-100 text-center shadow-sm card-categoria">
          <div class="card-img-container">
            <img src="assets/img/Camperas/CamperaRompevientosHovy.png" class="card-img-top" alt="Camperas">
          </div>
          <div class="card-body">
            <h5 class="card-title">Camperas</h5>
            <p class="card-text">Ideales para los días frescos o de invierno. Muy abrigadas y de calidad premium.</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- 🧾 Sección: Beneficios de comprar en UMMA -->
<section class="seccion-confianza py-5">
  
  <div class="container text-center">
    
    <!-- Título de sección -->
    <h2 class="titulo-confianza mb-5">¿Por qué elegir UMMA?</h2>

    <!-- Grid de beneficios (3 columnas en desktop, 1 en móvil) -->
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <!-- Beneficio 1: Envíos -->
      <div class="col">
        <div class="card-confianza">
          <i class="bi bi-box-seam icono-confianza"></i>
          <h3 class="titulo-item">Envíos a todo el país</h3>
          <p class="texto-item">Recibí tus pedidos donde estés con seguimiento online.</p>
        </div>
      </div>

      <!-- Beneficio 2: Precios -->
      <div class="col">
        <div class="card-confianza">
          <i class="bi bi-piggy-bank icono-confianza"></i>
          <h3 class="titulo-item">Precios accesibles</h3>
          <p class="texto-item">Calidad y estilo sin gastar de más.</p>
        </div>
      </div>

      <!-- Beneficio 3: Garantía -->
      <div class="col">
        <div class="card-confianza">
          <i class="bi bi-patch-check-fill icono-confianza"></i>
          <h3 class="titulo-item">Productos garantizados</h3>
          <p class="texto-item">Te aseguramos satisfacción o te devolvemos tu dinero.</p>
        </div>
      </div>

    </div>

  </div>

</section>

<!--
    Script para controlar la visualización del modal de invitación a registrarse/iniciar sesión.
    - show_login_modal: variable booleana generada por PHP que indica si debe mostrarse el modal.
    - miCodigo.js: contiene la lógica para mostrar el modal, guardar la preferencia del usuario y gestionar el cierre/redirección.
    
    Si show_login_modal es true, el modal se muestra automáticamente.
    Cuando el usuario hace clic en "Continuar como invitado", se guarda la preferencia en localStorage y en una cookie,
    y se cierra el modal antes de redirigir. Así, el backend puede saber si debe volver a mostrar el modal o no.
-->
<script>
    var show_login_modal = <?= isset($show_login_modal) && $show_login_modal ? 'true' : 'false' ?>;
</script>
<script src="<?= base_url('assets/js/miCodigo.js') ?>"></script>