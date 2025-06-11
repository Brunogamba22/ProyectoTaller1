<div class="login-container py-5 ">
    <div class="container">
            <div class="card shadow border-0">
                <!-- Encabezado -->
                <div class="card-header bg-gradient-primary text-white py-3">
                    <h3 class="mb-0">
                        <i class="fas fa-edit me-2"></i>
                        <?= isset($producto['id']) ? 'Editar Producto' : 'Nuevo Producto' ?>
                    </h3>
                </div>

                <div class="card-body p-4">

                    <!-- Errores de validación -->
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif; ?>

                    <!-- Acción del formulario: actualizar si hay ID, o crear nuevo -->
                    <?php
                        $formAction = isset($producto['id']) ? base_url('producto/actualizar/' . $producto['id']) : base_url('producto/store');
                    ?>
                    <form action="<?= $formAction ?>" method="post" enctype="multipart/form-data">

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre_prod" class="form-label">Nombre del Producto</label>
                            <input type="text" name="nombre_prod" class="form-control"
                                value="<?= isset($producto['nombre_prod']) ? esc($producto['nombre_prod']) : '' ?>" required>
                        </div>

                        <!-- Categoría -->
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select name="categoria" class="form-select" required>
                                <option selected disabled>Seleccionar...</option>
                                <?php foreach ($categorias as $cat) : ?>
                                    <option value="<?= $cat['id'] ?>"
                                        <?= isset($producto['categoria_id']) && $producto['categoria_id'] == $cat['id'] ? 'selected' : '' ?>>
                                        <?= esc($cat['nombre']) ?>
                                    </option>
                                <?php endforeach; ?>
                                   
                            </select>
                        </div>

                        <!-- Precio de compra -->
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio de Compra</label>
                            <input type="number" step="0.01" name="precio" class="form-control"
                                value="<?= isset($producto['precio']) ? esc($producto['precio']) : '' ?>" required>
                        </div>

                        <!-- Precio de venta -->
                        <div class="mb-3">
                            <label for="precio_vta" class="form-label">Precio de Venta</label>
                            <input type="number" step="0.01" name="precio_vta" class="form-control"
                                value="<?= isset($producto['precio_vta']) ? esc($producto['precio_vta']) : '' ?>" required>
                        </div>

                        <!-- Stock -->
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control"
                                value="<?= isset($producto['stock']) ? esc($producto['stock']) : '' ?>" required>
                        </div>

                        <!-- Stock mínimo -->
                        <div class="mb-3">
                            <label for="stock_min" class="form-label">Stock Mínimo</label>
                            <input type="number" name="stock_min" class="form-control"
                                value="<?= isset($producto['stock_min']) ? esc($producto['stock_min']) : '' ?>" required>
                        </div>

                        <!-- Imagen actual -->
                        <?php if (!empty($producto['imagen'])) : ?>
                            <div class="mb-3">
                                <label class="form-label">Imagen actual</label><br>
                                <img src="<?= base_url('assets/uploads/' . $producto['imagen']) ?>" width="100" class="img-thumbnail">
                            </div>
                        <?php endif; ?>

                        <!-- Subir nueva imagen -->
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" name="imagen" class="form-control" accept="image/*">
                            <small class="text-muted">
                                <?= isset($producto['imagen']) ? 'Dejar vacío para mantener la imagen actual' : 'Subir imagen del producto' ?>
                            </small>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="<?= base_url('Listado') ?>" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success">
                                <?= isset($producto['id']) ? 'Guardar Cambios' : 'Crear Producto' ?>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
    </div>
</div>
