<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger text-center">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<div class="login-container" style="background-color:  #C8A97E; min-height: calc(100vh - 160px); display: flex; align-items: center; padding: 2rem 0;">
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
                                <div style="text-align: right; margin-top: 0.5rem;">
                                    <a href="#" style="color: var(--dorado); text-decoration: none; font-size: 0.9rem;">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                            <!-- Botón de Inicio de Sesión -->
                            <button type="submit" class="login-btn" style="width: 100%; padding: 1rem; background-color: var(--dorado); color: var(--texto-oscuro); border: none; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; margin-bottom: 1.5rem;">
                                Iniciar Sesión
                            </button>
                            <!-- Redes sociales -->
                            <div style="text-align: center; margin: 1.5rem 0;">
                                <p style="color: var(--marron-claro); position: relative; margin: 1.5rem 0;">
                                    <span style="background: white; padding: 0 1rem; position: relative; z-index: 1;">o inicia con</span>
                                    <span style="position: absolute; top: 50%; left: 0; right: 0; height: 1px; background: var(--beige); z-index: 0; transform: translateY(-50%);"></span>
                                </p>
                                <div style="display: flex; justify-content: center; gap: 1rem;">
                                    <button type="button" style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid var(--beige); background: white; color: var(--marron-oscuro); display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                        <i class="bi bi-google" style="font-size: 1.2rem;"></i>
                                    </button>
                                    <button type="button" style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid var(--beige); background: white; color: var(--marron-oscuro); display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                        <i class="bi bi-facebook" style="font-size: 1.2rem;"></i>
                                    </button>
                                </div>
                            </div>
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

