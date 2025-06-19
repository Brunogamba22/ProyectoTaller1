<?php
// Asegúrate de tener $ventas como array con compras
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mis Compras</title>
  <link rel="stylesheet" href="miEstilo.css">
</head>
<body>
  <div class="ventas-container">
    <div class="ventas-header">
      <h1>Mis Compras</h1>
    </div>

    <?php if (empty($ventas)) : ?>
      <p class="empty-message">No se encontraron compras registradas.</p>
    <?php else : ?>
      <div class="ventas-table-container">
        <table class="ventas-table">
          <thead>
            <tr>
              <th># Orden</th>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Costo</th>
              <th>Subtotal</th>
              <th>Detalle</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $total = 0;
            foreach ($ventas as $venta): 
              $subtotal = $venta['precio'] * $venta['cantidad'];
              $total += $subtotal;
            ?>
              <tr>
                <td><?= $venta['id'] ?></td>
                <td><?= $venta['productos'] ?></td>
                <td><?= $venta['cantidad'] ?></td>
                <td>$<?= number_format($venta['precio'], 2) ?></td>
                <td>$<?= number_format($subtotal, 2) ?></td>
                <td>
                  <a href="detalle_compra.php?id=<?= $venta['id'] ?>" class="action-btn view-btn">
                    Ver Detalle
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="total-amount">
          Total: $<?= number_format($total, 2) ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>
