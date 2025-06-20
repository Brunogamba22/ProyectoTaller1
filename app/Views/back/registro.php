<!-- Contenedor principal del formulario de registro -->
<div class="d-flex align-items-center" style="background-color: #C8A97E; min-height: calc(100vh - 160px); padding-top: 2rem; padding-bottom: 2rem;">
    <div class="container">
        <!-- Tarjeta de registro -->
        <div class="card mx-auto p-4 p-lg-5 border-0" style="max-width: 700px; background-color: white; border-radius: 18px; box-shadow: 0 12px 35px rgba(62, 39, 35, 0.1);">
            
            <!-- Título con línea decorativa -->
            <h2 class="text-center mb-5" style="color: var(--marron-oscuro); font-size: 2rem; position: relative;">
                <span style="display: inline-block; padding: 0 1rem; background: white; position: relative; z-index: 1;">Registro</span>
                <span style="position: absolute; top: 50%; left: 0; right: 0; height: 2px; background: var(--beige); z-index: 0; transform: translateY(-50%);"></span>
            </h2>

            <?php $validation = \Config\Services::validation(); ?>

            <!-- Formulario -->
            <form method="post" action="<?= base_url('/enviar-form') ?>">
                <?= csrf_field() ?>

                <?php if(session()->getFlashdata('fail')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif; ?>
                <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif; ?>

                <div class="row g-4">
                    <!-- Nombre -->
                    <div class="col-md-6">
                        <div class="form-group-enhanced">
                            <label for="nombre" class="form-label-enhanced">Nombre</label>
                            <div class="input-group-enhanced">
                                <span class="input-group-icon"><i class="bi bi-person-fill"></i></span>
                                <input name="nombre" type="text" class="form-control-enhanced <?= $validation->getError('nombre') ? 'is-invalid' : '' ?>" id="nombre" placeholder="Ej: María" value="<?= old('nombre') ?>">
                            </div>
                            <?php if($validation->getError('nombre')): ?>
                                <div class="invalid-feedback d-block"><?= $validation->getError('nombre') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Apellido -->
                    <div class="col-md-6">
                        <div class="form-group-enhanced">
                            <label for="apellido" class="form-label-enhanced">Apellido</label>
                            <div class="input-group-enhanced">
                                <span class="input-group-icon"><i class="bi bi-person-fill"></i></span>
                                <input name="apellido" type="text" class="form-control-enhanced <?= $validation->getError('apellido') ? 'is-invalid' : '' ?>" id="apellido" placeholder="Ej: González" value="<?= old('apellido') ?>">
                            </div>
                            <?php if($validation->getError('apellido')): ?>
                                <div class="invalid-feedback d-block"><?= $validation->getError('apellido') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-12">
                        <div class="form-group-enhanced">
                            <label for="email" class="form-label-enhanced">Email</label>
                            <div class="input-group-enhanced">
                                <span class="input-group-icon"><i class="bi bi-envelope-fill"></i></span>
                                <input name="email" type="email" class="form-control-enhanced <?= $validation->getError('email') ? 'is-invalid' : '' ?>" id="email" placeholder="Ej: ejemplo@correo.com" value="<?= old('email') ?>">
                            </div>
                            <?php if($validation->getError('email')): ?>
                                <div class="invalid-feedback d-block"><?= $validation->getError('email') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Usuario -->
                    <div class="col-md-6">
                        <div class="form-group-enhanced">
                            <label for="usuario" class="form-label-enhanced">Usuario</label>
                            <div class="input-group-enhanced">
                                <span class="input-group-icon"><i class="bi bi-person-fill"></i></span>
                                <input name="usuario" type="text" class="form-control-enhanced <?= $validation->getError('usuario') ? 'is-invalid' : '' ?>" id="usuario" placeholder="Ej: María2216" value="<?= old('usuario') ?>">
                            </div>
                            <?php if($validation->getError('usuario')): ?>
                                <div class="invalid-feedback d-block"><?= $validation->getError('usuario') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Contraseña -->
                    <div class="col-12">
                        <div class="form-group-enhanced">
                            <label for="pass" class="form-label-enhanced">Contraseña</label>
                            <div class="input-group-enhanced">
                                <span class="input-group-icon"><i class="bi bi-lock-fill"></i></span>
                                <input name="pass" type="password" class="form-control-enhanced <?= $validation->getError('pass') ? 'is-invalid' : '' ?>" id="pass" placeholder="Mínimo 4 caracteres">
                                <button class="btn-toggle-password" type="button"><i class="bi bi-eye-fill"></i></button>
                            </div>
                            <?php if($validation->getError('pass')): ?>
                                <div class="invalid-feedback d-block"><?= $validation->getError('pass') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Botón de registro -->
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn-register-enhanced">
                            <span>Crear mi cuenta</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>

                    <!-- Enlace a login -->
                    <div class="col-12 text-center mt-4">
                        <p class="login-link-text">¿Ya tienes una cuenta?
                            <a href="<?= base_url('login') ?>" class="login-link">Inicia sesión aquí</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    
document.addEventListener('DOMContentLoaded', function () {
    // Para botones en formularios con clase personalizada
    document.querySelectorAll('.btn-toggle-password').forEach(button => {
        button.addEventListener('click', function () {
            const input = this.previousElementSibling;
            const icon = this.querySelector('i');
            const isPassword = input.getAttribute('type') === 'password';
            input.setAttribute('type', isPassword ? 'text' : 'password');
            icon.classList.toggle('bi-eye-fill');
            icon.classList.toggle('bi-eye-slash-fill');
        });
    });

    // Para botón dentro del formulario de login
    const loginToggle = document.querySelector('#login-password + button');
    if (loginToggle) {
        loginToggle.addEventListener('click', function () {
            const input = document.getElementById('login-password');
            const icon = this.querySelector('i');
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';
            icon.classList.toggle('bi-eye-fill');
            icon.classList.toggle('bi-eye-slash-fill');
        });
    }
});

</script>