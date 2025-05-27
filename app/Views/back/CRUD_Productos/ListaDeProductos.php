<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <!-- Tarjeta de tabla -->
            <div class="card shadow">
                <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-boxes me-2"></i>Listado de Productos</h4>
                    <!-- Botón para agregar nuevo producto -->
                    <a href="<?= base_url('producto/crear') ?>" class="btn btn-light text-primary">
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
                                    <th>Precio Venta</th>
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

                                            <!-- Mostrar nombre del producto -->
                                            <td><?= esc($prod['nombre_prod']) ?></td>

                                            <!-- Mostrar imagen del producto (si existe) -->
                                            <td>
                                                <img src="<?= base_url('assets/uploads/' . $prod['imagen']) ?>" alt="Imagen" width="60" class="img-thumbnail">
                                            </td>

                                            <!-- Mostrar nombre de categoría (se asume que ya está resuelto como string en el array) -->
                                            <td><?= esc($prod['categoria']) ?></td>

                                            <td>$<?= number_format($prod['precio'], 2) ?></td>
                                            <td>$<?= number_format($prod['precio_vta'], 2) ?></td>
                                            <td><?= $prod['stock'] ?></td>

                                            <!-- Botones de acción: Editar y Eliminar -->
                                            <td class="text-center">
                                                <a href="<?= base_url('producto/editar/' . $prod['id']) ?>" class="btn btn-sm btn-warning me-1">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="<?= base_url('producto/eliminar/' . $prod['id']) ?>" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Estás seguro de eliminar este producto?');">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <!-- Mensaje si no hay productos -->
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">No hay productos cargados.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive -->
                </div> <!-- end card-body -->
            </div>
        </div>
    </div>
</div>
<!-- end container -->