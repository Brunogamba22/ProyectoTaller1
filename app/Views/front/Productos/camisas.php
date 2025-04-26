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
            
            <!-- === Producto 1 === -->
            <!-- === Camisa 1 === -->
        <div class="col">
        <div class="card h-100">
            <img src="assets/img/Camisas/Camisa1.png" alt="Camisa Mocha Brown" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Camisa Mocha Brown</h5>
                <p class="card-text">Camisa de algodón suave con corte regular. Ideal para uso casual o semiformal.</p>
                <p class="producto-info"><strong>Precio:</strong> $7200</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 12 unidades</p>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
            </div>
        </div>
        </div>

        <!-- === Camisa 2 === -->
        <div class="col">
        <div class="card h-100">
            <img src="assets/img/Camisas/Camisa2.png" alt="Camisa Mao Camel" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Camisa Mao Camel</h5>
                <p class="card-text">Camisa estilo mao en tono camel, versátil y elegante. Tela liviana ideal para media estación.</p>
                <p class="producto-info"><strong>Precio:</strong> $7400</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 10 unidades</p>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
            </div>
        </div>
        </div>

        <!-- === Camisa 3 === -->
        <div class="col">
        <div class="card h-100">
            <img src="assets/img/Camisas/Camisa3.png" alt="Camisa Rayada Bail Out" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Camisa Rayada Bail Out</h5>
            <p class="card-text">Diseño a rayas verticales con botones ocultos. Un clásico moderno que no pasa de moda.</p>
            <p class="producto-info"><strong>Precio:</strong> $7650</p>
            <p class="producto-info"><strong>Stock disponible:</strong> 8 unidades</p>
            </div>
            <div class="card-footer text-center">
            <button class="btn btn-dorado">Agregar al carrito</button>
            </div>
        </div>
        </div>

        <!-- === Camisa 4 === -->
        <div class="col">
        <div class="card h-100">
            <img src="assets/img/Camisas/Camisa4.png" alt="" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Camisa Rayada Bail Out</h5>
            <p class="card-text">Camisa fresca y colorida, perfecta para destacar con estilo en cualquier ocasión.</p>
            <p class="producto-info"><strong>Precio:</strong> $7300</p>
            <p class="producto-info"><strong>Stock disponible:</strong> 14 unidades</p>
            </div>
            <div class="card-footer text-center">
            <button class="btn btn-dorado">Agregar al carrito</button>
            </div>
        </div>
        </div>

        <!-- === Camisa 5 === -->
        <div class="col">
        <div class="card h-100">
            <img src="assets/img/Camisas/Camisa5.png" alt="Camisa Tube Riders Black" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Camisa Tube Riders Black</h5>
            <p class="card-text">Look urbano con detalles minimalistas. Color negro profundo ideal para combinar.</p>
            <p class="producto-info"><strong>Precio:</strong> $7800</p>
            <p class="producto-info"><strong>Stock disponible:</strong> 9 unidades</p>
            </div>
            <div class="card-footer text-center">
            <button class="btn btn-dorado">Agregar al carrito</button>
            </div>
        </div>
        </div>

        <!-- === Camisa 6 === -->
        <div class="col">
        <div class="card h-100">
            <img src="assets/img/Camisas/Camisa6.png" alt="Camisa Corderoy Folcklore Mugo" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Camisa Corderoy Folcklore Mugo</h5>
            <p class="card-text">Camisa de corderoy grueso, ideal para otoño-invierno. Estilo folclórico moderno.</p>
            <p class="producto-info"><strong>Precio:</strong> $7950</p>
            <p class="producto-info"><strong>Stock disponible:</strong> 7 unidades</p>
            </div>
            <div class="card-footer text-center">
            <button class="btn btn-dorado">Agregar al carrito</button>
            </div>
        </div>
        </div>

        <!-- === Camisa 7 === -->
        <div class="col">
        <div class="card h-100">
            <img src="assets/img/Camisas/Camisa7.png" alt="Camisa Riptide Vibes White" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Camisa Riptide Vibes White</h5>
            <p class="card-text">Camisa blanca con detalles surferos. Fresca y liviana, ideal para el verano.</p>
            <p class="producto-info"><strong>Precio:</strong> $7500</p>
            <p class="producto-info"><strong>Stock disponible:</strong> 11 unidades</p>
            </div>
            <div class="card-footer text-center">
            <button class="btn btn-dorado">Agregar al carrito</button>
            </div>
        </div>
        </div>

            <!-- === Producto 8 === -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Camisas/Camisa8.png" class="card-img-top" alt="Remera 2">
                <div class="card-body">
                <h5 class="card-title">Camisa Mao Terracota</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
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
