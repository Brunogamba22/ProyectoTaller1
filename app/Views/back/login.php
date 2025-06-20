<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger text-center">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<div  style="background-color:  #C8A97E; min-height: calc(100vh - 160px); display: flex; align-items: center; padding: 2rem 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Tarjeta de login -->
                <div class="card mx-auto p-4 p-lg-5 border-0" style="max-width: 700px; background-color: white; border-radius: 18px; box-shadow: 0 12px 35px rgba(62, 39, 35, 0.1);">
                    <h2 class="text-center mb-5" style="color: var(--marron-oscuro); font-size: 2rem; position: relative;">
                        <span style="display: inline-block; padding: 0 1rem; background: white; position: relative; z-index: 1;">Iniciar Sesión</span>
                        <span style="position: absolute; top: 50%; left: 0; right: 0; height: 2px; background: var(--beige); z-index: 0; transform: translateY(-50%);"></span>
                    </h2>
                    <!-- Cuerpo del formulario -->
                    <div class="login-body" style="padding: 2.5rem;">
                        <!-- Formulario -->
                        <form action="<?= base_url('/auth') ?>" method="post">
                            <!-- Campo Email -->
                            <div class="form-group-login" style="margin-bottom: 1.75rem;">
                                <label for="login-email" style="display: block; margin-bottom: 0.5rem; color: var(--marron-medio); font-weight: 600;">Email</label>
                                <div class="input-group-login" style="display: flex; align-items: center; border: 2px solid var(--beige); border-radius: 8px; transition: all 0.3s ease;">
                                    <span style="padding: 0 1rem; color: var(--dorado);">
                                        <i class="bi bi-envelope-fill"></i>
                                    </span>
                                    <input type="email" id="login-email" name="email" placeholder="tucorreo@ejemplo.com" style="flex: 1; padding: 1rem 0.75rem; border: none; background: transparent; font-size: 1rem; color: var(--marron-oscuro);" required>
                                </div>
                            </div>
                            <!-- Campo Contraseña -->
                            <div class="form-group-login" style="margin-bottom: 2rem;">
                                <label for="login-password" style="display: block; margin-bottom: 0.5rem; color: var(--marron-medio); font-weight: 600;">Contraseña</label>
                                <div class="input-group-login" style="display: flex; align-items: center; border: 2px solid var(--beige); border-radius: 8px; transition: all 0.3s ease;">
                                    <span style="padding: 0 1rem; color: var(--dorado);">
                                        <i class="bi bi-lock-fill"></i>
                                    </span>
                                    <input type="password" id="login-password" name="pass" placeholder="Ingresa tu contraseña" style="flex: 1; padding: 1rem 0.75rem; border: none; background: transparent; font-size: 1rem; color: var(--marron-oscuro);" required>
                                    <button type="button" style="background: none; border: none; padding: 0 1rem; color: var(--marron-claro); cursor: pointer;">
                                        <i class="bi bi-eye-fill"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Botón de Inicio de Sesión -->
                            <button type="submit" class="login-btn" style="width: 100%; padding: 1rem; background-color: var(--dorado); color: var(--texto-oscuro); border: none; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; margin-bottom: 1.5rem;">
                                Iniciar Sesión
                            </button>
                            <!-- Enlace a registro -->
                            <div style="text-align: center;">
                                <p style="color: var(--marron-claro);">¿No tienes una cuenta? 
                                    <a href="Registrarse" style="color: var(--dorado); text-decoration: none; font-weight: 600;">Regístrate</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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

