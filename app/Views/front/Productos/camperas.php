<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= esc($titulo) ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/miEstilo.css') ?>">
</head>
<body>
    <div class="productos-grid">
        <?php foreach ($productos as $producto): ?>
        <article class="producto-card">
            <img src="<?= base_url('assets/uploads/productos/' . $producto['imagen']) ?>" 
                 class="producto-imagen" 
                 alt="<?= esc($producto['nombre']) ?>">
            <div class="producto-contenido">
                <h2 class="producto-nombre"><?= esc($producto['nombre']) ?></h2>
                <p class="producto-descripcion"><?= esc($producto['descripcion']) ?></p>
                <p class="producto-precio">$<?= esc($producto['precio_vta']) ?></p>

                <form action="<?= base_url('carrito/agregar') ?>" method="post" class="producto-formulario">
                    <input type="hidden" name="producto_id" value="<?= $producto['id'] ?>">
                    <label for="talla" class="talla-label">Talle:</label>
                    <select name="talla_id" class="talla-selector" required>
                        <option disabled selected>Seleccionar</option>
                        <?php foreach ($producto['talles'] as $t): ?>
                            <option value="<?= $t['talla_id'] ?>">
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
