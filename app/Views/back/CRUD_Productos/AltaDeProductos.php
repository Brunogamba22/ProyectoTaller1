<div class="login-container py-5 ">
    <div class="container">
        <div class="card shadow">
        <div class="card-header text-center ">
            <h2> Alta de Productos</h2>
        </div>

        <!-- Validaciones -->
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif; ?>
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>
        <?php helper('form'); ?>
        <?php $validation = \Config\Services::validation(); ?>
        <!-- Formulario para crear un nuevo producto -->
        <form action="<?= base_url('/enviar-prod') ?>" method="post" enctype="multipart/form-data">
            <div class="card-body media" style="max-width:568px">
            <div class="mb-2">
                <label for="nombre" class="form-label">Producto</label>
                <input class="form-control" type="text" name="nombre" id="nombre_prod" value="<?= set_value('nombre'); ?>" placeholder="Nombre del producto" autofocus>
                <!-- error de validación -->
                <?php if ($validation->getError('nombre')) : ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('nombre'); ?>
                    </div>
                <?php endif; ?>
            </div>

                <div class="mb-2">
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="0">Seleccionar Categoría</option>
                        <?php foreach ($categorias as $categoria) : ?>
                            <option value="<?= $categoria['id']; ?>" <?= set_select('categoria', $categoria['id']); ?>>
                                <?= $categoria['id'], ". " , $categoria['nombre']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if ($validation->getError('categoria')) : ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError('categoria'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-2">
                    <label for="precio" class="form-label">Precio de Costo</label>
                    <input class="form-control" type="text" name="precio" id="precio" value="<?= set_value('precio'); ?>">
                    <!--error de validación -->
                    <?php if ($validation->getError('precio')) : ?>
                        <div class="alert alert-danger mt-2">
                           <?= $validation->getError('precio'); ?>
                         </div>
                    <?php endif; ?>
                </div>
                <!-- Precio de venta -->
                <div class="mb-2">
                    <label for="precio_vta" class="form-label">Precio de Venta</label>
                    <input class="form-control" type="text" name="precio_vta" id="precio_vta" value="<?= set_value('precio_vta'); ?>">
                    <!-- Error -->
                    <?php if ($validation->getError('precio_vta')): ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError('precio_vta'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                
                    <label for="stock" class="form-label">Stock</label>
                    <input class="form-control" type="text" name="stock" id="stock" value="<?= set_value('stock'); ?>">
                  <!-- error de validación -->
                  <?php if ($validation->getError('stock')) : ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('stock'); ?>
                    </div>
                  <?php endif; ?>
                </div>

                
                
                <div class="mb-2">
                    <label for="stock_min" class="form-label">Stock Mínimo</label>
                    <input class="form-control" type="text" name="stock_min" id="stock_min" value="<?= set_value('stock_min'); ?>">
                    <!-- Error -->
                    <?php if ($validation->getError('stock_min')): ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError('stock_min'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-2">



                <div class="mb-2">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input class="form-control" type="file" name="imagen" id="imagen" accept="image/png, image/jpg, image/jpeg">
                  <!-- error de validación -->
                  <?php if ($validation->getError('imagen')) : ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError('imagen'); ?>
                        </div>
                  <?php endif; ?>
                </div>

                <!-- Botones -->
                <div class="form-group">
                    <button type="submit" id="send_form" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                    <a href="<?= base_url('crear'); ?>" class="btn btn-secondary">Volver</a>
                </div>

            </div> <!-- Fin del card-body -->

            </div>
        </form> <!-- Fin del formulario -->
    </div>
    </div>
</div>
