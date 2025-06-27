<div class="compra-container">
    <?php if (empty($venta)): ?>
        <div class="alert alert-info text-center">
            <h4 class="alert-heading">No posee compras registradas</h4>
            <p>Para realizar una compra visite nuestro catálogo.</p>
            <a class="btn btn-primary" href="<?= base_url('catalogo') ?>">Ir al Catálogo</a>
        </div>
    <?php else: ?>
        <!-- Mostrar mensaje Flash si existe -->
        <?php if (session()->getFlashdata('mensaje')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('mensaje') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        <?php endif; ?>

        <div class="compra-header">
            <h2>Detalle de Compra #<?= $venta['id'] ?></h2>
            <div class="compra-info">
                <p><strong>Fecha:</strong> <?= date('d/m/Y H:i', strtotime($venta['fecha_venta'])) ?></p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="compra-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Producto</th>
                        <th>Imagen</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; $total = 0; ?>
                    <?php foreach ($detalles as $detalle): ?>
                        <?php $subtotal = $detalle['precio_unitario'] * $detalle['cantidad']; ?>
                        <?php $total += $subtotal; ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($detalle['nombre_producto']) ?></td>
                            <td>
                                <img src="<?= base_url('assets/uploads/productos/' . ($detalle['imagen'] ?? 'default.jpg')) ?>" 
                                alt="<?= esc($detalle['nombre_producto']) ?>" 
                                class="product-image">
                            </td>
                            <td><?= $detalle['cantidad'] ?></td>
                            <td>$<?= number_format($detalle['precio_unitario'], 2) ?></td>
                            <td>$<?= number_format($subtotal, 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-end"><strong>Total:</strong></td>
                        <td><strong>$<?= number_format($total, 2) ?></strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="compra-actions text-center mt-4 no-imprimir">
            <a href="<?= base_url('vista_compras/' . $venta['id'])?>" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left"></i> Volver a mis compras
            </a>
            <button onclick="window.print()" class="btn btn-primary">
                <i class="fas fa-print"></i> Imprimir comprobante
            </button>
        </div>
    <?php endif; ?>
</div>
