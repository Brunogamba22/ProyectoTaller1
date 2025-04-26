<!DOCTYPE html>
<html lang="es"> <!-- Indica que el idioma del documento es español -->
    <head>
        <meta charset="UTF-8"> <!-- Define la codificación de caracteres para admitir tildes y caracteres especiales -->
        <title> <?php echo $titulo; ?> Camperas </title> <!-- Título que se muestra en la pestaña del navegador -->
        </head>
    <body>

        <!-- Contenedor principal con padding vertical -->
        <div class="container py-5">
        
            <!-- Título centrado y con margen inferior -->
            <h2 class="mb-4 text-center">Catálogo de Camperas</h2>
            
            <!-- Grid de Bootstrap: 1 columna en pantallas chicas, 3 en pantallas medianas en adelante -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                
                            <!-- === Campera 1 === -->
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/Camperas/Campera1.png" alt="Campera Rompevientos Hovy" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Campera Rompevientos Hovy</h5>
                            <p class="card-text">Rompevientos liviano ideal para media estación. Resistente al viento y de secado rápido. Estilo urbano y moderno.</p>
                            <p class="producto-info"><strong>Precio:</strong> $8900</p>
                            <p class="producto-info"><strong>Stock disponible:</strong> 7 unidades</p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-dorado">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- === Campera 2 === -->
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/Camperas/Campera2.png" alt="Chaqueta Urban Ventura Negra" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Chaqueta Urban Ventura Negra</h5>
                            <p class="card-text">Chaqueta negra con estilo urbano. Corte recto y bolsillos frontales. Comodidad y diseño para uso diario.</p>
                            <p class="producto-info"><strong>Precio:</strong> $9800</p>
                            <p class="producto-info"><strong>Stock disponible:</strong> 6 unidades</p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-dorado">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- === Campera 3 === -->
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/Camperas/Campera3.png" alt="Campera Rompevientos Irupé Negra" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Campera Rompevientos Irupé Negra</h5>
                            <p class="card-text">Rompevientos color negro, ideal para días frescos y ventosos. Liviana, compacta y fácil de guardar.</p>
                            <p class="producto-info"><strong>Precio:</strong> $8500</p>
                            <p class="producto-info"><strong>Stock disponible:</strong> 9 unidades</p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-dorado">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- === Campera 4 === -->
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/Camperas/Campera4.png" alt="Chaqueta Urban Oxnard Negra" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Chaqueta Urban Oxnard Negra</h5>
                            <p class="card-text">Chaqueta con diseño minimalista y urbano. Cierre frontal, cuello alto y tela resistente. Ideal para días frescos.</p>
                            <p class="producto-info"><strong>Precio:</strong> $9900</p>
                            <p class="producto-info"><strong>Stock disponible:</strong> 4 unidades</p>
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
