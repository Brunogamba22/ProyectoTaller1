<div class=" py-5">
    <div class="container">
        <div class="col-12">
            <!-- Tarjeta de tabla -->
            <div class="card shadow">
                <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-boxes me-2"></i>Listado de Productos</h4>
                    <div class="d-flex gap-2"> <!-- Contenedor flexible con espacio entre botones -->
                        <!-- Botón Productos Eliminados -->
                        <a href="<?= base_url('eliminados') ?>" class="btn btn-sm bg-white text-danger border-danger">
                            <i class="fas fa-trash-restore me-1"></i> Productos Eliminados
                        </a>
                        
                        <!-- Botón Nuevo Producto -->
                        <a href="<?= base_url('AltaProductos') ?>" class="btn btn-sm bg-white text-primary border-primary">
                            <i class="fas fa-plus me-1"></i> Nuevo Producto
                        </a>
                    </div>
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
                            <?php if (!empty($productos)) : ?>
                                <?php foreach ($productos as $prod) : ?>
                                    <tr>
                                        <td><?= $prod['id'] ?></td>
                                        <td><?= esc($prod['nombre']) ?></td>

                                        <!-- IMAGEN DEL PRODUCTO -->
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
                                        <td>$<?= number_format($prod['precio_vta'], 2) ?></td>

                                        <!-- STOCK POR TALLA -->
                                        <td>
                                            <?php if (!empty($prod['tallas'])): ?>
                                                <ul class="list-unstyled mb-0">
                                                    <?php foreach ($prod['tallas'] as $t): ?>
                                                        <li>
                                                            <?= esc($t['talla']) ?>: <?= esc($t['stock']) ?> unidades
                                                            <?php if ($t['stock'] < $t['stock_min']) : ?>
                                                                <span class="text-danger">(Bajo)</span>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php else: ?>
                                                <small class="text-muted">Sin tallas cargadas</small>
                                            <?php endif; ?>
                                        </td>

                                        <!-- ACCIONES -->
                                        <td class="text-center">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="btn-group">
                                                    <a href="<?= base_url('producto/editar/' . $prod['id']) ?>" class="btn btn-sm btn-warning me-1">
                                                        <i class="fas fa-edit"></i> Editar
                                                    </a>
                                                    <a href="<?= base_url('eliminar/' . $prod['id']) ?>" class="btn btn-sm btn-danger"
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
                                    <td colspan="8" class="text-center text-muted">No hay productos cargados.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                        </table>   
                        <!-- PAGINACIÓN -->
                            <?php if (isset($pagina) && isset($totalPaginas) && $totalPaginas > 1): ?>
                                <div class="d-flex justify-content-center mt-4">
                                    <div class="productos-pagination d-flex align-items-center gap-2 flex-wrap">
                                        <?php if ($pagina > 1): ?>
                                            <a class="btn btn-outline-primary btn-sm" href="<?= base_url('/Listado') . '?page=' . ($pagina - 1) ?>">
                                                <i class="fas fa-chevron-left"></i> Anterior
                                            </a>
                                        <?php endif; ?>

                                        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                                            <a class="btn btn-sm <?= ($i == $pagina) ? 'btn-primary text-white' : 'btn-outline-secondary' ?>"
                                            href="<?= base_url('/Listado') . '?page=' . $i ?>">
                                                <?= $i ?>
                                            </a>
                                        <?php endfor; ?>

                                        <?php if ($pagina < $totalPaginas): ?>
                                            <a class="btn btn-outline-primary btn-sm" href="<?= base_url('/Listado') . '?page=' . ($pagina + 1) ?>">
                                                Siguiente <i class="fas fa-chevron-right"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                                                        
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>