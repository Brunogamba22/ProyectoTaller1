<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0">
                <!-- Encabezado de la tarjeta -->
                <div class="card-header bg-gradient-primary text-white py-3">
                    <h3 class="mb-0"><i class="fas fa-edit me-2"></i>Editar Producto</h3>
                </div>

                <div class="card-body p-4">
                    <!-- Validaciones o errores si existen -->
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif; ?>

                    <!-- Formulario de edición -->
                    <form action="<?= base_url('producto/actualizar/' . $producto['id']) ?>" method="post" enctype="multipart/form-data">

                        <!-- Campo: Nombre del producto -->
                        <div class="mb-3">
                            <label for="nombre_prod" class="form-label">Nombre del Producto</label>
                            <input type="text" name="nombre_prod" class="form-control"
                                value="<?= esc($producto['nombre_prod']) ?>" required>
                        </div>

                        <!-- Campo: Categoría -->
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select name="categoria" class="form-select" required>
                                <option selected disabled>Seleccionar...</option>
                                <?php foreach ($categorias as $cat) : ?>
                                    <option value="<?= $cat['id'] ?>"
                                        <?= $producto['categoria_id'] == $cat['id'] ? 'selected' : '' ?>>
                                        <?= $cat['nombre'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Campo: Precio de compra -->
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio de Compra</label>
                            <input type="number" name="precio" class="form-control" step="0.01"
                                value="<?= esc($producto['precio']) ?>" required>
                        </div>

                        <!-- Campo: Precio de venta -->
                        <div class="mb-3">
                            <label for="precio_vta" class="form-label">Precio de Venta</label>
                            <input type="number" name="precio_vta" class="form-control" step="0.01"
                                value="<?= esc($producto['precio_vta']) ?>" required>
                        </div>

                        <!-- Campo: Stock actual -->
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control"
                                value="<?= esc($producto['stock']) ?>" required>
                        </div>

                        <!-- Campo: Stock mínimo -->
                        <div class="mb-3">
                            <label for="stock_min" class="form-label">Stock Mínimo</label>
                            <input type="number" name="stock_min" class="form-control"
                                value="<?= esc($producto['stock_min']) ?>" required>
                        </div>

                        <!-- Campo: Imagen actual (previsualización) -->
                        <div class="mb-3">
                            <label class="form-label">Imagen actual</label><br>
                            <img src="<?= base_url('assets/uploads/' . $producto['imagen']) ?>" width="100" class="img-thumbnail">
                        </div>

                        <!-- Campo: Subir nueva imagen (opcional) -->
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Cambiar Imagen</label>
                            <input type="file" name="imagen" class="form-control" accept="image/*">
                            <small class="text-muted">Dejar vacío para mantener la imagen actual</small>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="<?= base_url('admin/productos') ?>" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
