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

            <!-- ------------------------------------------------------- -->
            <!-- ============== COMIENZO SECCION REMERAS ============== -->
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
            <!-- ============== FIN SECCION REMERAS ============== -->
            <!-- ------------------------------------------------------- -->

            <!-- ------------------------------------------------------- -->
            <!-- ============== COMIENZO SECCION BUZOS ============== -->
            <!-- === Producto  Buzo1 === -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo1.webp" class="card-img-top img-producto" alt="Buzo 1">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Gris</h5>
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
                <img src="assets/img/Buzos/Buzo2.webp" class="card-img-top img-producto" alt="buzo 2">
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

            <!-- === Producto  Buzo3=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo3.webp" class="card-img-top img-producto" alt="buzo 3">
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

            <!-- === Producto  Buzo4=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo4.webp" class="card-img-top img-producto" alt="buzo 4">
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

            <!-- === Producto  Buzo5=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo5.webp" class="card-img-top img-producto" alt="buzo 5">
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

            <!-- === Producto  Buzo6=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo6.webp" class="card-img-top img-producto" alt="buzo 6">
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

            <!-- === Producto  Buzo7=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/Buzo7.webp" class="card-img-top img-producto" alt="buzo 7">
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

            <!-- === Producto  buzo8=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/HoodieNoirFadeOup.webp" class="card-img-top img-producto" alt="Hoodie Noir Fade Oup">
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

            <!-- === Producto  buzo9=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/HoodieBrownFadeOut.webp" class="card-img-top img-producto" alt="Hoodie Brown Fade Oup">
                <div class="card-body">
                <h5 class="card-title">Buzo Canguro Rose</h5>
                <p class="card-text">Ideal para combinar con cualquier outfit. Suave al tacto.</p>
                <p class="producto-info"><strong>Precio:</strong> $3900</p>
                <p class="producto-info"><strong>Stock disponible:</strong> 20 unidades</p>
                </div>
                <div class="card-footer text-center">
                <button class="btn btn-dorado">Agregar al carrito</button>
                </div>
            </div>
            </div>

            <!-- === Producto  buzo10=== -->
            <div class="col">
            <div class="card h-100">
                <img src="assets/img/Buzos/HoodieRose.webp" class="card-img-top img-producto" alt="Hoodie Rose">
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

            <!-- ============== FIN SECCION BUZOS ============== -->
            <!-- ------------------------------------------------------- -->
            

            <!-- ------------------------------------------------------- -->
            <!-- ============== COMIENZO SECCION CAMISAS ============== -->
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
            <!-- ============== FIN SECCION CAMISAS ============== -->
            <!-- ------------------------------------------------------- -->
            

            <!-- ------------------------------------------------------- -->
            <!-- ============== COMIENZO SECCION CAMPERAS ============== -->

                           
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

                 <!-- ============== FIN SECCION CAMPERAS ============== -->
                 <!-- ------------------------------------------------------- -->
            

                <!-- ------------------------------------------------------- -->
                <!-- ============== COMIENZO SECCION CALZADOS ============== -->
                            
                    <!-- === Producto 1 === -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/Zapatillas/Zapa1.avif" alt="Zapatilla Skate 1" class="card-img-top">
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
                    <img src="assets/img/Zapatillas/Zapatilla2.jpg" alt="Zapatilla Skate 2" class="card-img-top">
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
                    <img src="assets/img/Zapatillas/Zapatilla3.jpg" alt="Zapatilla Skate 3" class="card-img-top">
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
                    <img src="assets/img/Zapatillas/Zapatilla4.jpg" alt="Zapatilla Skate 4" class="card-img-top">
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
                    <img src="assets/img/Zapatillas/Zapatilla5.jpg" alt="Zapatilla Skate 5" class="card-img-top">
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
                    <img src="assets/img/Zapatillas/Zapatilla6.webp" alt="Zapatilla Skate 6" class="card-img-top">
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
                    <img src="assets/img/Zapatillas/Zapatilla7.webp" alt="Zapatilla Jordan" class="card-img-top">
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
