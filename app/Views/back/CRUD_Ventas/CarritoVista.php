<div class="container-fluid carrito-umma d-flex flex-column justify-content-between min-vh-100" id="carrito">
  <div>
    <!-- Cabecera del carrito -->
    <div class="carrito-header-umma heading">
      <h2 class="text-center">Productos en tu Carrito</h2>
    </div>

    <!-- Flash de mensaje -->
    <?php if (session()->getFlashdata('mensaje')): ?>
      <div class="alert alert-warning alert-dismissible fade show mt-3 mx-3" role="alert">
        <?= session()->getFlashdata('mensaje') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
      </div>
    <?php endif; ?>

    <!-- Si el carrito está vacío -->
    <?php if (empty($cart)): ?>
      <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 50vh;">
        <h4 class="text-muted mb-3">Tu carrito está vacío</h4>
        <a class="btn btn-dark btn-lg" href="<?= base_url('productos') ?>">
          <i class="fa-solid fa-store me-2"></i> Ir a comprar productos
        </a>
      </div>
    <?php endif; ?>

    <!-- Si el carrito tiene productos -->
    <?php if (!empty($cart)): ?>
      <form action="<?= base_url('carrito_actualiza') ?>" method="post">
        <div class="container my-3">
        
          <table class="table tabla-carrito-umma">
            <thead>
              <tr>
                <th>IMAGEN</th>
                <th>PRODUCTO</th>
                <th>TALLE</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>SUBTOTAL</th>
                <th>ACCIONES</th>
              </tr>
            </thead>
            <tbody>
              <?php $gran_total = 0; ?>
              <?php foreach ($cart as $item): ?>
                <?php $gran_total += $item['price'] * $item['qty']; ?>

                <input type="hidden" name="cart[<?= esc($item['rowid']) ?>][id]" value="<?= esc($item['id']) ?>">
                <input type="hidden" name="cart[<?= esc($item['rowid']) ?>][rowid]" value="<?= esc($item['rowid']) ?>">
                <input type="hidden" name="cart[<?= esc($item['rowid']) ?>][name]" value="<?= esc($item['name']) ?>">
                <input type="hidden" name="cart[<?= esc($item['rowid']) ?>][price]" value="<?= esc($item['price']) ?>">
                <input type="hidden" name="cart[<?= esc($item['rowid']) ?>][qty]" value="<?= esc($item['qty']) ?>">

                <tr class="fila-producto-umma">
                  <td><img src="<?= base_url('assets/uploads/productos/' . $item['options']['imagen']) ?>" alt="<?= esc($item['name']) ?>" class="imagen-producto-umma"></td>
                  <td><?= esc($item['name']) ?></td>
                  <td><?= esc($item['options']['talle']) ?></td>
                  <td>$<?= number_format($item['price'], 2) ?></td>
                  <td>
                    <div class="contador-cantidad-umma">
                      <a class="btn-cantidad-umma btn-mas-umma" href="<?= base_url('carrito_suma/' . $item['rowid']) ?>">+</a>
                      <?= number_format($item['qty']) ?>
                      <a class="btn-cantidad-umma btn-menos-umma" href="<?= base_url('carrito_resta/' . $item['rowid']) ?>">-</a>
                    </div>
                  </td>
                  <td>$<?= number_format($item['subtotal'], 2) ?></td>
                  <td>
                    <a href="<?= base_url('carrito_elimina/' . $item['rowid']) ?>">
                      <button type="button" class="btn-accion-umma btn-eliminar-umma">Eliminar</button>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>

              <tr class="fila-total-umma">
                <td colspan="5" class="text-end texto-total-umma"><strong>Total: $<?= number_format($gran_total, 2) ?></strong></td>
                <td class="text-end" colspan="2">
                  <button type="button" class="btn-accion-umma btn-borrar-umma" onclick="window.location='<?= base_url('borrar') ?>'">Borrar Carrito</button>
                  <button type="button" class="btn-accion-umma btn-comprar-umma" onclick="window.location='<?= base_url('carrito-comprar') ?>'">Comprar</button>
                </td>
              </tr>
            </tbody>
          </table>
          
          <!-- Botón "Seguir comprando" debajo de la tabla (opcional) -->
          <div class="d-flex justify-content-start mt-3">
            <a class="btn-seguir-comprando-umma" href="<?= base_url('productos') ?>">
              <i class="fa-solid fa-store"></i> Seguir comprando
            </a>
          </div>
        </div>
      </form>
    <?php endif; ?>
  </div>
</div>