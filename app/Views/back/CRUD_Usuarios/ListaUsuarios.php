<div class=" py-5 ">
    <div class="container">
        <div class="col-12">
            <!-- Tarjeta de tabla -->
            <div class="card shadow">
                <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-users me-2"></i>Listado de Usuarios</h4>
                    <!-- Botón para agregar nuevo usuario -->
                    <a href="<?= base_url('altaUsuario') ?>" class="btn btn-light text-primary">
                        <i class="fas fa-plus"></i> Nuevo Usuario
                    </a>
                </div>

                <div class="card-body p-4">
                    <!-- Mensaje de éxito si existe -->
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Tabla de usuarios -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Usuario</th>
                                    <th>Email</th>
                                    <th>Perfil</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Recorremos el array de usuarios enviado desde el controlador -->
                                <?php if (!empty($usuarios)) : ?>
                                    <?php foreach ($usuarios as $user) : ?>
                                        <tr>
                                            <td><?= $user['id_usuarios'] ?></td>
                                            <td><?= esc($user['nombre']) ?></td>
                                            <td><?= esc($user['apellido']) ?></td>
                                            <td><?= esc($user['usuario']) ?></td>
                                            <td><?= esc($user['email']) ?></td>
                                            <td><?= esc($user['perfil_id'] == 1 ? 'Administrador' : 'Usuario') ?></td>
                                            <td>
                                                <?php if ($user['baja'] == 'SI') : ?>
                                                    <span class="badge bg-danger">Inactivo</span>
                                                <?php else : ?>
                                                    <span class="badge bg-success">Activo</span>
                                                <?php endif; ?>
                                            </td>
                                            
                                            <!-- Columna Acciones -->
                                            <td class="text-center">
                                                <!-- Contenedor de acciones -->
                                                <div class="d-flex flex-column align-items-center">
                                                    <!-- Botones de acciones -->
                                                    <div class="btn-group">
                                                        <a href="<?= base_url('usuarioEdit/' . $user['id_usuarios']) ?>" class="btn btn-sm btn-warning me-1">
                                                            <i class="fas fa-edit"></i> Editar
                                                        </a>
                                                        <?php if ($user['baja'] == 'NO') : ?>
                                                            <a href="<?= base_url('usuarioEstado/' . $user['id_usuarios'] . '/SI') ?>" 
                                                                class="btn btn-sm btn-danger" style="min-width: 100px;"
                                                                onclick="return confirm('¿Estás seguro de desactivar este usuario?');">
                                                                    <i class="fas fa-user-slash"></i> Desactivar
                                                            </a>
                                                        <?php else : ?>
                                                            <a href="<?= base_url('usuarioEstado/' . $user['id_usuarios'] . '/NO') ?>" 
                                                                class="btn btn-sm btn-success" style="min-width: 100px;"
                                                                onclick="return confirm('¿Deseás activar este usuario?');">
                                                                    <i class="fas fa-user-check"></i> Activar
                                                            </a>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">No hay usuarios registrados.</td>
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