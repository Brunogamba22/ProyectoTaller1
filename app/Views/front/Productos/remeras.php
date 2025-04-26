<!DOCTYPE html>
<html lang="es"> <!-- Indica que el idioma del documento es español -->
    <head>
        <meta charset="UTF-8"> <!-- Define la codificación de caracteres para admitir tildes y caracteres especiales -->
        <title> <?php echo $titulo; ?> Remeras </title> <!-- Título que se muestra en la pestaña del navegador -->
        </head>
    <body>

        <!-- Contenedor principal con padding vertical -->
        <div class="container py-5">
        
        <!-- Título centrado y con margen inferior -->
            <h2 class="mb-4 text-center">Catálogo de Remeras</h2>
            
            <!-- Grid de Bootstrap: 1 columna en pantallas chicas, 3 en pantallas medianas en adelante -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                
            <!-- === Producto 1 === -->
            <!-- === Producto 1 Remera1=== -->
            <div class="col"> <!-- Una columna del grid -->
            <div class="card h-100"> <!-- Tarjeta que ocupa toda la altura disponible -->
                
                <!-- Imagen del producto -->
                <img src="assets/img/Remeras/Remera1.webp" class="card-img-top img-producto" alt="remera 1">
                
                <!-- Cuerpo de la tarjeta con la información del producto -->
                <div class="card-body">
                <h5 class="card-title">Remera Gris Oscuro Oversize</h5> <!-- Nombre del producto -->
                <p class="card-text">Remera de algodón 100%. Talles del S al XL.</p> <!-- Descripción -->
                <p class="producto-info"><strong>Precio:</strong> $4500</p> <!-- Precio del producto -->
                <p class="producto-info"><strong>Stock disponible:</strong> 15 unidades</p> <!-- Cantidad disponible -->
                </div>
                
                <!-- Pie de la tarjeta con el botón de acción -->
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button> <!-- Botón para agregar -->
                </div>

            </div>
            </div>

            <!-- === Producto 2 Remera2=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remeras/Remera2.webp" class="card-img-top img-producto" alt="Remera 2">
                <div class="card-body">
                <h5 class="card-title">Remera Azul Oversize</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            
            <!-- === Producto 3 remera3=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remeras/Remera3.webp" class="card-img-top img-producto" alt="Remera 3">
                <div class="card-body">
                <h5 class="card-title">Remera Blanca Clásica</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

             <!-- === Producto 4 remera4=== -->
            <div class="col">
                <div class="card h-100">
                <img src="assets/img/Remeras/Remera4.webp" class="card-img-top img-producto" alt="Remera 4">
                <div class="card-body">
                <h5 class="card-title">Remera Rock and roll</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 5 remera5=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remeras/Remera5.webp" class="card-img-top img-producto" alt="Remera 5">
                <div class="card-body">
                <h5 class="card-title">Remera Rock and roll</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 6 remera6=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remeras/Remera6.webp" class="card-img-top img-producto" alt="Remera 6">
                <div class="card-body">
                <h5 class="card-title">Remera Rock and roll</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

             <!-- === Producto 7 remera7=== -->
             <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remeras/Remera7.webp" class="card-img-top img-producto" alt="Remera 7">
                <div class="card-body">
                <h5 class="card-title">Remera Rock and roll</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 8 remera8=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remeras/Remera8.webp" class="card-img-top img-producto" alt="Remera 8">
                <div class="card-body">
                <h5 class="card-title">Remera Rock and roll</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 9 remera9=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remeras/Remera9.webp" class="card-img-top img-producto" alt="Remera 9">
                <div class="card-body">
                <h5 class="card-title">Remera Rock and roll</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 10 remera10=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remeras/Remera10.webp" class="card-img-top img-producto" alt="Remera 10">
                <div class="card-body">
                <h5 class="card-title">Remera Rock and roll</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- Podés seguir agregando más productos duplicando bloques como este -->

        </div>
        </div>
    </body>
</html>
