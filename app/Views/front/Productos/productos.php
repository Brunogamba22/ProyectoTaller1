<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?> Productos</title>
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/miEstilo.css') ?>">
</head>
<body>
    <!-- Contenedor principal de productos -->
    <div class="productos-grid">
        <?php foreach ($productos as $producto): ?>
        <article class="producto-card">
            <!-- Imagen del producto -->
            <img src="<?= base_url('assets/uploads/productos/' . $producto['imagen']) ?>" 
                 class="producto-imagen" 
                 alt="<?= esc($producto['nombre']) ?>">
            
            <!-- Contenido de la tarjeta -->
            <div class="producto-contenido">
                <!-- Nombre del producto -->
                <h2 class="producto-nombre"><?= esc($producto['nombre']) ?></h2>
                
                <!-- Descripción del producto -->
                <p class="producto-descripcion"><?= esc($producto['descripcion']) ?></p>
                
                <!-- Precio del producto -->
                <p class="producto-precio">$<?= esc($producto['precio_vta']) ?></p>
                
                <!-- Formulario para seleccionar talle y agregar al carrito -->
                <form action="<?= base_url('carrito/add') ?>" method="post" class="producto-formulario">
                    <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                    <input type="hidden" name="nombre_prod" value="<?= $producto['nombre'] ?>">
                    <input type="hidden" name="precio_vta" value="<?= $producto['precio_vta'] ?>">
                    <input type="hidden" name="imagen" value="<?= $producto['imagen'] ?>">

                    <label for="talla" class="talla-label">Talle:</label>
                    <select name="talle" class="talla-selector" required>
                        <option disabled selected>Seleccionar</option>
                        <?php foreach ($producto['tallas'] as $t): ?>
                            <option value="<?= $t['talla'] ?>">
                                <?= esc($t['talla']) ?> (<?= $t['stock'] ?> disponibles)
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <button type="submit" class="boton-carrito">Agregar al carrito</button>
                </form>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</body>
</html>