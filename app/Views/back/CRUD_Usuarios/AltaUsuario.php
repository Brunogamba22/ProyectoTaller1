<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0">
                <!-- Encabezado -->
                <div class="card-header bg-gradient-primary text-white py-3">
                    <h3 class="mb-0">
                        <i class="fas fa-user-plus me-2"></i> Alta de Usuario
                    </h3>
                </div>

                <div class="card-body p-4">
                    <!-- Mensajes -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php endif; ?>

                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif; ?>

                    <!-- Formulario -->
                    <form action="<?= base_url('guardarUsuario') ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>

                        <!-- Nombre y Apellido -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required
                                    value="<?= old('nombre') ?>" placeholder="Ej: Juan">
                            </div>
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required
                                    value="<?= old('apellido') ?>" placeholder="Ej: Pérez">
                            </div>
                        </div>

                        <!-- Usuario y Email -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="usuario" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required
                                    value="<?= old('usuario') ?>" placeholder="Ej: juanperez123">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    value="<?= old('email') ?>" placeholder="Ej: juan@gmail.com">
                            </div>
                        </div>

                        <!-- Contraseña y Perfil -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="pass" name="pass" required placeholder="********">
                            </div>
                            <div class="col-md-6">
                                <label for="perfil_id" class="form-label">Perfil</label>
                                <select class="form-select" id="perfil_id" name="perfil_id" required>
                                    <option value="" disabled selected>Seleccione un perfil</option>
                                    <option value="1" <?= old('perfil_id') == '1' ? 'selected' : '' ?>>Administrador</option>
                                    <option value="2" <?= old('perfil_id') == '2' ? 'selected' : '' ?>>Usuario</option>
                                </select>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url('listaUsuarios') ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Guardar Usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
