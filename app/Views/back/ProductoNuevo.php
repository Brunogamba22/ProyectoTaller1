<div class="container mt-5">
  <h2>Listado de Productos</h2>

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
      <?= session()->getFlashdata('success') ?>
    </div>
  <?php endif; ?>

  <a href="<?= base_url('/productos/crear') ?>" class="btn btn-success mb-3">Agregar nuevo producto</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Categoría</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Activo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($producto as $prod): ?>
        <tr>
          <td><?= $prod['id'] ?></td>
          <td><?= $prod['nombre'] ?></td>
          <td><?= $prod['categoria_id'] ?></td>
          <td>$<?= $prod['precio'] ?></td>
          <td><?= $prod['stock'] ?></td>
          <td><?= $prod['activo'] ? 'Sí' : 'No' ?></td>
          <td>
            <a href="<?= base_url('/productos/editar/' . $prod['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
            <a href="<?= base_url('/productos/borrar/' . $prod['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?');">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
