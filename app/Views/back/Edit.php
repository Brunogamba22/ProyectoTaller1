
<div class="container mt-5">
  <h2>Editar Producto</h2>

  <?php $validation = \Config\Services::validation(); ?>

  <form action="<?= base_url('/productos/actualizar') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?= $producto['nombre'] ?>" required>
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea name="descripcion" class="form-control"><?= $producto['descripcion'] ?></textarea>
    </div>

    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" step="0.01" class="form-control" name="precio" value="<?= $producto['precio'] ?>" required>
    </div>

    <div class="mb-3">
      <label for="stock" class="form-label">Stock</label>
      <input type="number" class="form-control" name="stock" value="<?= $producto['stock'] ?>" required>
    </div>

    <div class="mb-3">
      <label for="imagen" class="form-label">Imagen</label>
      <input type="text" class="form-control" name="imagen" value="<?= $producto['imagen'] ?>">
    </div>

    <div class="mb-3">
      <label for="categoria_id" class="form-label">Categoría</label>
      <select name="categoria_id" class="form-control">
        <?php foreach ($categorias as $categoria): ?>
          <option value="<?= $categoria['id'] ?>" <?= $categoria['id'] == $producto['categoria_id'] ? 'selected' : '' ?>>
            <?= $categoria['nombre'] ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="activo" class="form-label">Activo</label>
      <select name="activo" class="form-control">
        <option value="1" <?= $producto['activo'] ? 'selected' : '' ?>>Sí</option>
        <option value="0" <?= !$producto['activo'] ? 'selected' : '' ?>>No</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="<?= base_url('/productos') ?>" class="btn btn-secondary">Cancelar</a>
  </form>
</div>
