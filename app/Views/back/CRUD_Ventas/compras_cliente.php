<?php
// Verifica que exista el array $ventas con los datos de compras del cliente
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Configuración básica del documento -->
  <meta charset="UTF-8"> <!-- Codificación de caracteres -->
  <title>Mis Compras</title> <!-- Título de la pestaña del navegador -->
  <link rel="stylesheet" href="miEstilo.css"> <!-- Enlace a la hoja de estilos -->
</head>
<body>

<!-- Contenedor principal de las compras -->
<div class="compras-container">
    <!-- Título de la página -->
    <h1 class="compras-titulo">Mis compras</h1>

    <?php if (empty($ventas)) : ?>
        <!-- Mensaje que se muestra cuando no hay compras -->
        <p class="compras-vacio">No hay compras registradas.</p>
    <?php else: ?>
        <!-- Tabla que muestra el listado de compras -->
        <table class="tabla-compras">
            <thead>
                <!-- Encabezados de la tabla -->
                <tr>
                    <th>Nombre cliente</th> <!-- Columna para el nombre -->
                    <th>Email</th>         <!-- Columna para el email -->
                    <th>Usuario</th>       <!-- Columna para el nombre de usuario -->
                    <th>Total</th>         <!-- Columna para el total de la compra -->
                    <th>Fecha</th>         <!-- Columna para la fecha de compra -->
                    <th>Venta_id</th>      <!-- Columna para el ID de la venta -->
                    <th>Opción</th>        <!-- Columna para acciones -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta): ?>
                    <!-- Fila por cada compra -->
                    <tr>
                        <!-- Celda con el nombre del cliente (escapado para seguridad) -->
                        <td><?= esc($venta['nombre_cliente']) ?></td>
                        
                        <!-- Celda con el email del cliente (escapado para seguridad) -->
                        <td><?= esc($venta['email']) ?></td>
                        
                        <!-- Celda con el nombre de usuario (repetido si no hay username) -->
                        <td><?= esc($venta['nombre_cliente']) ?></td>
                        
                        <!-- Celda con el total formateado como moneda -->
                        <td>$<?= number_format($venta['total'], 2) ?></td>
                        
                        <!-- Celda con la fecha de la venta -->
                        <td><?= $venta['fecha_venta'] ?></td>
                        
                        <!-- Celda con el ID de la venta -->
                        <td><?= $venta['id'] ?></td>
                        
                        <!-- Celda con el botón para ver detalles -->
                        <td>
                            <!-- Enlace para ver el detalle de la venta específica -->
                            <a href="<?= base_url('detalle_venta/' . $venta['id']) ?>" class="btn-ver-detalle">
                                Ver Detalle <!-- Texto del botón -->
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

</body>
</html>