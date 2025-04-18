    <!-- Título principal -->
    <header>
      <h1 class="titulo">Bienvenidos a UMMA</h1>
    </header>
    
    <!-- Sección de bienvenida -->
    <section class="seccion1 container">
        <h4>Moda urbana al mejor precio. ¡Descubrí nuestras colecciones!</h4>
    </section>
      
      <!-- Carrusel de imágenes -->
      <section class="conteiner-fluid">
        <div id="carouselExample" class="carousel slide carrusel-personalizado" data-bs-ride="carousel">
          <div class="carousel-inner"> <!-- Contenedor de las imágenes -->
            <!-- Imágenes del carrusel -->
            <div class="carousel-item active">
              <img src="assets/img/ejemProyectoBY1.jpeg" class="d-block w-100" alt="Producto 1">
            </div>
            <div class="carousel-item">
              <img src="assets/img/ejemProyectoBY2.jpeg" class="d-block w-100" alt="Producto 2">
            </div>
            <div class="carousel-item">
              <img src="assets/img/ejemProyectoBY3.jpeg" class="d-block w-100" alt="Producto 3">
            </div>
          </div>
          
          <!-- Controles del carrusel -->
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

      <!-- Contenedor principal con padding vertical -->
      <div class="container py-5">
        
        <!-- Título centrado y con margen inferior -->
        <h2 class="mb-4 text-center">Catálogo de Remeras</h2>
        
        <!-- Grid de Bootstrap: 1 columna en pantallas chicas, 3 en pantallas medianas en adelante -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            <!-- === Producto 1 === -->
            <div class="col"> <!-- Una columna del grid -->
            <div class="card h-100"> <!-- Tarjeta que ocupa toda la altura disponible -->
                
                <!-- Imagen del producto -->
                <img src="ruta-de-tu-imagen.jpg" class="card-img-top" alt="Remera 1">
                
                <!-- Cuerpo de la tarjeta con la información del producto -->
                <div class="card-body">
                <h5 class="card-title">Remera Negra Oversize</h5> <!-- Nombre del producto -->
                <p class="card-text">Remera de algodón 100% con diseño minimalista. Talles del S al XL.</p> <!-- Descripción -->
                <p><strong>Precio:</strong> $4500</p> <!-- Precio del producto -->
                <p><strong>Stock disponible:</strong> 15 unidades</p> <!-- Cantidad disponible -->
                </div>
                
                <!-- Pie de la tarjeta con el botón de acción -->
                <div class="card-footer text-center">
                <button class="btn btn-primary">Agregar al carrito</button> <!-- Botón para agregar -->
                </div>

            </div>
            </div>

            <!-- === Producto 2 === -->
            <div class="col">
            <div class="card h-100">
                <img src="otra-imagen.jpg" class="card-img-top" alt="Remera 2">
                <div class="card-body">
                <h5 class="card-title">Remera Blanca Clásica</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p><strong>Precio:</strong> $3900</p>
                <p><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- Podés seguir agregando más productos duplicando bloques como este -->

        </div>
        </div>