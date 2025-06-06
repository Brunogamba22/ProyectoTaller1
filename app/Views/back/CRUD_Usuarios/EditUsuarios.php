<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0">
                <!-- Encabezado -->
                <div class="card-header bg-gradient-primary text-white py-3">
                    <h3 class="mb-0">
                        <i class="fas fa-user-edit me-2"></i>
                        Editar Usuario
                    </h3>
                </div>

                <div class="card-body p-4">
                    <!-- Mensajes de validación -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <!-- Formulario de edición -->
                    <form action="<?= base_url('usuario/actualizar/'.$usuario['id_usuarios']) ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">

                        <!-- Nombre y Apellido -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" 
                                    value="<?= old('nombre', $usuario['nombre'] ?? '') ?>" required>
                            </div>

                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" 
                                    value="<?= old('apellido', $usuario['apellido'] ?? '') ?>" required>
                            </div>
                        </div>

                        <!-- Usuario y Email -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="usuario" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" 
                                    value="<?= old('usuario', $usuario['usuario'] ?? '') ?>" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                    value="<?= old('email', $usuario['email'] ?? '') ?>" required>
                            </div>
                        </div>

                        <!-- Perfil y Estado -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="perfil_id" class="form-label">Perfil</label>
                                <select class="form-select" id="perfil_id" name="perfil_id" required>
                                    <option value="1" <?= ($usuario['perfil_id'] == 1) ? 'selected' : '' ?>>Administrador</option>
                                    <option value="2" <?= ($usuario['perfil_id'] == 2) ? 'selected' : '' ?>>Usuario</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="baja" class="form-label">Estado</label>
                                <select class="form-select" id="baja" name="baja" required>
                                    <option value="NO" <?= ($usuario['baja'] == 'NO') ? 'selected' : '' ?>>Activo</option>
                                    <option value="SI" <?= ($usuario['baja'] == 'SI') ? 'selected' : '' ?>>Inactivo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Contraseña (opcional) -->
                        <div class="mb-4">
                            <label for="pass" class="form-label">Nueva Contraseña</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                            <small class="text-muted">Dejar en blanco para no cambiar (mínimo 6 caracteres)</small>
                        </div>

                        <!-- Botones de acción -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="<?= base_url('usuarios') ?>" class="btn btn-secondary">
                                <i class="fas fa-times me-1"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-1"></i> Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>