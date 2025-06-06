<!DOCTYPE html>
<html lang="es"> <!-- Indica que el idioma del documento es español -->
    <head>
        <meta charset="UTF-8"> <!-- Define la codificación de caracteres para admitir tildes y caracteres especiales -->
        <title> <?php echo $titulo; ?> Buzos </title> <!-- Título que se muestra en la pestaña del navegador -->
        </head>
    <body>

        <!-- Contenedor principal con padding vertical -->
        <div class="container py-5">
        
        <!-- Título centrado y con margen inferior -->
        <h2 class="mb-4 text-center">Catálogo de Buzos</h2>
        
        <!-- Grid de Bootstrap: 1 columna en pantallas chicas, 3 en pantallas medianas en adelante -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
    
                <!-- === Producto  Buzo1 === -->
            <div class="col"><!-- Una columna del grid -->
            <div class="card h-100"><!-- Tarjeta que ocupa toda la altura disponible -->
                <img src="assets/img/Buzos/Buzo1_CanguroNegro.webp" class="card-img-top img-producto" alt="Buzo 1">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Negro</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>


            <!-- === Producto  Buzo2=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo2_CanguroMarron.webp" class="card-img-top img-producto" alt="buzo 2">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Marron</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto  Buzo3=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo3_CuelloRedondo.webp" class="card-img-top img-producto" alt="buzo 3">
                <div class="card-body">
                <h5 class="card-title">Buzo Cuello Redondo</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto  Buzo4=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo4_CanguroPalmera.webp" class="card-img-top img-producto" alt="buzo 4">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Negro Palmera</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto  Buzo5=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo5_CanguroBlanco.webp" class="card-img-top img-producto" alt="buzo 5">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Blanco</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto  Buzo6=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo6_CanguroBanvak.webp" class="card-img-top img-producto" alt="buzo 6">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Banvak</h5>
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
