<div class="deleted-products-container py-5">
    <div class="container">
        <div class="col-12">
            <div class="card shadow deleted-products-card">
                <div class="card-header deleted-products-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-trash-alt me-2"></i>Productos Eliminados</h4>
                    <a href="<?= base_url('Listado') ?>" class="btn btn-light btn-back">
                        <i class="fas fa-arrow-left me-1"></i> Volver a Productos
                    </a>
                </div>

                <div class="card-body p-4">
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover deleted-products-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Categoría</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($productosEliminados)) : ?>
                                    <?php foreach ($productosEliminados as $prod) : ?>
                                        <tr>
                                            <td><?= $prod['id'] ?></td>
                                            <td><?= esc($prod['nombre']) ?></td>
                                            <td>
                                                <?php if (!empty($prod['imagen'])) : ?>
                                                    <img src="<?= base_url('assets/uploads/productos/' . $prod['imagen']) ?>" 
                                                        alt="<?= esc($prod['nombre']) ?>" 
                                                        class="deleted-product-img">
                                                <?php else : ?>
                                                    <img src="<?= base_url('assets/uploads/default.png') ?>" 
                                                        class="deleted-product-img">
                                                <?php endif; ?>
                                            </td>
                                            <td><?= esc($prod['categoria_nombre']) ?></td>
                                            <td>$<?= number_format($prod['precio'], 2) ?></td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <div class="btn-group">
                                                        <a href="<?= base_url('reactivar-producto/' . $prod['id']) ?>" 
                                                           class="btn btn-sm btn-reactivate me-2"
                                                           onclick="return confirm('¿Estás seguro de reactivar este producto?');">
                                                            <i class="fas fa-undo-alt me-1"></i> Reactivar
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="7" class="text-center empty-message">No hay productos eliminados.</td>
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