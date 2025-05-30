<!DOCTYPE html>
<html lang="es"> <!-- Indica que el idioma del documento es español -->
    <head>
        <meta charset="UTF-8"> <!-- Define la codificación de caracteres para admitir tildes y caracteres especiales -->
        <title> <?php echo $titulo; ?> Calzados </title> <!-- Título que se muestra en la pestaña del navegador -->
        </head>
    <body>

        <!-- Contenedor principal con padding vertical -->
        <div class="container py-5">
        
        <!-- Título centrado y con margen inferior -->
        <h2 class="mb-4 text-center">Catálogo de Calzados</h2>
        
        <!-- Grid de Bootstrap: 1 columna en pantallas chicas, 3 en pantallas medianas en adelante -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
                    <!-- === Producto 1 === -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/Calzado/ZapatillaClassicBlack.avif" alt="Zapatilla Classic Black" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Zapatilla Classic Black</h5>
                        <p class="card-text">Zapatillas de estilo skatewear con un diseño clásico en negro. Suela gruesa y material duradero para mayor resistencia y comodidad.</p>
                        <p class="producto-info"><strong>Precio:</strong> $3500</p>
                        <p class="producto-info"><strong>Stock disponible:</strong> 12 unidades</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-dorado">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- === Producto 2 === -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/Calzado/SkateWhite&Black.jpg" alt="Skate White & Black" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Zapatilla Skate White & Black</h5>
                        <p class="card-text">Ideales para el estilo urbano. Comodidad garantizada para tus días de skate o casuales.</p>
                        <p class="producto-info"><strong>Precio:</strong> $3600</p>
                        <p class="producto-info"><strong>Stock disponible:</strong> 10 unidades</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-dorado">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- === Producto 3 === -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/Calzado/SkateLowTopBlack.jpg" alt="Skate Low Top Black" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Zapatilla Skate Low Top Black</h5>
                        <p class="card-text">Zapatilla low top, con detalles que aportan un toque moderno. Perfectas para un look skate o urbano.</p>
                        <p class="producto-info"><strong>Precio:</strong> $3200</p>
                        <p class="producto-info"><strong>Stock disponible:</strong> 15 unidades</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-dorado">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- === Producto 4 === -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/Calzado/SkateEdition.jpg" alt="Skate Edition" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Zapatilla Skate Edition</h5>
                        <p class="card-text">Zapatilla beige con detalles en azul, ideal para quienes buscan un estilo skate sin perder la elegancia.</p>
                        <p class="producto-info"><strong>Precio:</strong> $3300</p>
                        <p class="producto-info"><strong>Stock disponible:</strong> 8 unidades</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-dorado">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- === Producto 5 === -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/Calzado/SkateDarkCharcoal.jpg" alt="Zapatilla Skate Dark Charcoal" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Zapatilla Skate Dark Charcoal</h5>
                        <p class="card-text">Zapatilla de estilo skate con tonos oscuros. Resistente, perfecta para cualquier aventura urbana.</p>
                        <p class="producto-info"><strong>Precio:</strong> $3400</p>
                        <p class="producto-info"><strong>Stock disponible:</strong> 9 unidades</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-dorado">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- === Producto 6 === -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/Calzado/SkateVibe.webp" alt="Zapatilla Skate Vibe" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Zapatilla Skate Vibe</h5>
                        <p class="card-text">Zapatilla de skatewear en un vibrante . Cómodas y con suela antideslizante, perfectas para tus actividades diarias.</p>
                        <p class="producto-info"><strong>Precio:</strong> $3700</p>
                        <p class="producto-info"><strong>Stock disponible:</strong> 10 unidades</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-dorado">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- === Producto 7 === -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/Calzado/JordanRetro1.webp" alt="Zapatilla Jordan" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Zapatilla Jordan Retro 1</h5>
                        <p class="card-text">Zapatillas Jordan Retro 1, un clásico de la marca. Con detalles en cuero premium y la icónica silueta, estas zapatillas ofrecen estilo y comodidad.</p>
                        <p class="producto-info"><strong>Precio:</strong> $12900</p>
                        <p class="producto-info"><strong>Stock disponible:</strong> 5 unidades</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-dorado">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
