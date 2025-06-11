<div class="login-container py-5">
    <div class="container">
        <div class="col-12">
            <!-- Tarjeta de tabla -->
            <div class="card shadow">
                <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-boxes me-2"></i>Listado de Productos</h4>
                    <!-- Botón para agregar nuevo producto -->
                    <a href="<?= base_url('AltaProductos') ?>" class="btn btn-light text-primary">
                        <i class="fas fa-plus"></i> Nuevo Producto
                    </a>
                </div>

                <div class="card-body p-4">
                    <!-- Mensaje de éxito si existe -->
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Tabla de productos -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Categoría</th>
                                    <th>Precio</th>
                                    <th>Precio_vta</th>
                                    <th>Stock</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Recorremos el array de productos enviado desde el controlador -->
                                <?php if (!empty($producto)) : ?>
                                    <?php foreach ($producto as $prod) : ?>
                                        <tr>
                                            <td><?= $prod['id'] ?></td>
                                            <td><?= esc($prod['nombre']) ?></td>
                                            
                                            <!-- IMAGEN DE LOS PRODUCTOS -->
                                            <td>
                                                <?php if (!empty($prod['imagen'])) : ?>
                                                    <img src="<?= base_url('assets/uploads/productos/' . $prod['imagen']) ?>" 
                                                        alt="<?= esc($prod['nombre']) ?>" 
                                                        width="60" 
                                                        class="img-thumbnail">
                                                <?php else : ?>
                                                    <img src="<?= base_url('assets/uploads/default.png') ?>" 
                                                        width="60"
                                                        class="img-thumbnail">
                                                <?php endif; ?>
                                            </td>
                                            
                                            <td><?= esc($prod['categoria_nombre']) ?></td>
                                            <td>$<?= number_format($prod['precio'], 2) ?></td>
                                            <td>$<?= number_format($prod['precio_vta'], 2) ?></td> <!-- Este es el precio de venta -->
                                            <td><?= $prod['stock_total'] ?></td> <!-- Este es el stock real -->

                                            
                                            <!-- Columna Acciones (ahora arriba de los botones) -->
                                            <td class="text-center">
                                                <!-- Contenedor de acciones -->
                                                <div class="d-flex flex-column align-items-center">
                                                    <!-- Botones de acciones -->
                                                    <div class="btn-group">
                                                        <a href="<?= base_url('producto/editar/' . $prod['id']) ?>" class="btn btn-sm btn-warning me-1">
                                                            <i class="fas fa-edit"></i> Editar
                                                        </a>
                                                        <a href="<?= base_url('producto/eliminar/' . $prod['id']) ?>" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('¿Estás seguro de eliminar este producto?');">
                                                            <i class="fas fa-trash-alt"></i> Eliminar
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">No hay productos cargados.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>