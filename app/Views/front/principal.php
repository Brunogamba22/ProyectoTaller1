<!-- Carrusel de imágenes con texto superpuesto -->
<section class="container-fluid px-0 mb-5 position-relative">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/Carrusel1.jpg" class="d-block w-100" alt="modelo 1">
      </div>
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
    
    <!-- Texto superpuesto -->
    <div class="overlay-text">
      <h2 class="titulo-carrusel">Bienvenidos a UMMA</h2>
      <p class="subtitulo-carrusel">Moda urbana al mejor precio. ¡Descubrí nuestras colecciones!</p>
    </div>
    
    <!-- Controles -->
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

<!-- 🛍️ Sección destacada de productos - Versión mejorada -->
<section class="container mb-5">
  <!-- Título de sección con estilo dorado -->
  <h2 class="text-center mb-4" style="color: var(--dorado); font-size: 2rem; position: relative; padding-bottom: 10px;">
    Nuestras Categorías
    <span style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 80px; height: 3px; background-color: var(--dorado);"></span>
  </h2>
  
  <!-- Contenedor de tarjetas - 3 columnas en desktop, 1 en móvil -->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    
    <!-- Tarjeta 1 - Remeras -->
    <div class="col">
      <div class="card h-100 text-center shadow-sm card-categoria">
        <div class="card-img-container">
          <img src="assets/img/Remeras/Remera1.webp" class="card-img-top" alt="Remeras">
        </div>
        <div class="card-body">
          <h5 class="card-title">Remeras</h5>
          <p class="card-text">Comodidad y estilo para el día a día. Modelos para todas las edades.</p>
        </div>
      </div>
    </div>

    <!-- Tarjeta 2 - Buzos -->
    <div class="col">
      <div class="card h-100 text-center shadow-sm card-categoria">
        <div class="card-img-container">
          <img src="assets/img/Buzos/buzo1.webp" class="card-img-top" alt="Buzos">
        </div>
        <div class="card-body">
          <h5 class="card-title">Buzos</h5>
          <p class="card-text">Elegí los clásicos que nunca fallan. ¡Ideales para todo el año!</p>
        </div>
      </div>
    </div>

    <!-- Tarjeta 3 - Calzados -->
    <div class="col">
      <div class="card h-100 text-center shadow-sm card-categoria">
        <div class="card-img-container">
          <img src="assets/img/Zapatillas/Zapatilla5.jpg" class="card-img-top" alt="Zapatillas">
        </div>
        <div class="card-body">
          <h5 class="card-title">Calzados</h5>
          <p class="card-text">Perfectas para los días de calor. Cómodas y con mucha onda.</p>
        </div>
      </div>
    </div>

    <!-- Tarjeta 4 - Camisas -->
    <div class="col">
      <div class="card h-100 text-center shadow-sm card-categoria">
        <div class="card-img-container">
          <img src="assets/img/Camisas/Camisa8.png" class="card-img-top" alt="Camisas">
        </div>
        <div class="card-body">
          <h5 class="card-title">Camisas</h5>
          <p class="card-text">Perfectas para ir elegante a todos lados. Cómodas y super facheras.</p>
        </div>
      </div>
    </div>

    <!-- Tarjeta 5 - Camperas -->
    <div class="col">
      <div class="card h-100 text-center shadow-sm card-categoria">
        <div class="card-img-container">
          <img src="assets/img/Camperas/Campera1.png" class="card-img-top" alt="Camperas">
        </div>
        <div class="card-body">
          <h5 class="card-title">Camperas</h5>
          <p class="card-text">Ideales para los dias de frescos o invierno. Muy abrigadas y de calidad premium.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 🧾 Sección de confianza mejorada -->
<section class="seccion-confianza py-5">
  <div class="container text-center">
    <h2 class="titulo-confianza mb-5">¿Por qué elegir UMMA?</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card-confianza">
          <i class="bi bi-box-seam icono-confianza"></i>
          <h3 class="titulo-item">Envíos a todo el país</h3>
          <p class="texto-item">Recibí tus pedidos donde estés con seguimiento online.</p>
        </div>
      </div>
      <div class="col">
        <div class="card-confianza">
          <i class="bi bi-piggy-bank icono-confianza"></i>
          <h3 class="titulo-item">Precios accesibles</h3>
          <p class="texto-item">Calidad y estilo sin gastar de más.</p>
        </div>
      </div>
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