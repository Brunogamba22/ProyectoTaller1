<!DOCTYPE html>
<html lang="es"> <!-- Indica que el idioma del documento es español -->
    <head>
        <meta charset="UTF-8"> <!-- Define la codificación de caracteres para admitir tildes y caracteres especiales -->
        <title> <?php echo $titulo; ?> Productos </title> <!-- Título que se muestra en la pestaña del navegador -->
        </head>
    <body>

        <!-- Contenedor principal con padding vertical -->
        <div class="container py-5">
        
        <!-- Título centrado y con margen inferior -->
        <h2 class="mb-4 text-center">Catálogo de Productos</h2>
        
        <!-- Grid de Bootstrap: 1 columna en pantallas chicas, 3 en pantallas medianas en adelante -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            <!-- === Producto 1 Remera1=== -->
            <div class="col"> <!-- Una columna del grid -->
            <div class="card h-100"> <!-- Tarjeta que ocupa toda la altura disponible -->
                
                <!-- Imagen del producto -->
                <img src="assets/img/Remera1.webp" class="card-img-top img-producto" alt="remera 1">
                
                <!-- Cuerpo de la tarjeta con la información del producto -->
                <div class="card-body">
                <h5 class="card-title">Remera Gris Oscuro Oversize</h5> <!-- Nombre del producto -->
                <p class="card-text">Remera de algodón 100%. Talles del S al XL.</p> <!-- Descripción -->
                <p><strong>Precio:</strong> $4500</p> <!-- Precio del producto -->
                <p><strong>Stock disponible:</strong> 15 unidades</p> <!-- Cantidad disponible -->
                </div>
                
                <!-- Pie de la tarjeta con el botón de acción -->
                <div class="card-footer text-center">
                <button class="btn btn-primary">Agregar al carrito</button> <!-- Botón para agregar -->
                </div>

            </div>
            </div>

            <!-- === Producto 2 Remera2=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Remera2.webp" class="card-img-top img-producto" alt="Remera 2">
                <div class="card-body">
                <h5 class="card-title">Remera Azul Oversize</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p><strong>Precio:</strong> $3900</p>
                <p><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 3 Buzo1 === -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzo1.webp" class="card-img-top img-producto" alt="Buzo 1">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Gris</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p><strong>Precio:</strong> $3900</p>
                <p><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
            </div>


            <!-- === Producto 4 Buzo2=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzo2.webp" class="card-img-top img-producto" alt="buzo 2">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Negro</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p><strong>Precio:</strong> $3900</p>
                <p><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 5 gorra1=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Gorras/GorraPrelavadaAzulMenta.jpeg" class="card-img-top img-producto" alt="Gorra Prelavada Azul Menta">
                <div class="card-body">
                <h5 class="card-title">Gorra Prelavada Azul Menta</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p><strong>Precio:</strong> $3900</p>
                <p><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 6 gorra2=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Gorras/GorraPrelavadaGrisClaro.jpeg" class="card-img-top img-producto" alt="Gorra Prelavada Azul Menta">
                <div class="card-body">
                <h5 class="card-title">Gorra Prelavada Gris claro</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p><strong>Precio:</strong> $3900</p>
                <p><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto 7 remera3=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/remeraT-shirtMesh.webp" class="card-img-top img-producto" alt="T-shirtMesh">
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

            <!-- === Producto 8 buzo3=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/HoodieNoirFadeOup.webp" class="card-img-top img-producto" alt="Hoodie Noir Fade Oup">
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
    </body>
</html>
