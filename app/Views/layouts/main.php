
    <!-- Contenido principal -->
    <?= $this->renderSection('content') ?>

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?= view('login') ?>
            </div>
        </div>
    </div>

    <!-- Tu JS personalizado -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            const manualLoginBtn = document.getElementById('manualLoginBtn');
            const protectedElements = document.querySelectorAll('.protected-action');
            
            // 1. Mostrar al cargar (solo si no está logueado)
            <?php if(!session()->has('logged_in')): ?>
                setTimeout(() => {
                    loginModal.show();
                }, 2000); // Retraso de 2 segundos
            <?php endif; ?>

            // 2. Mostrar al hacer clic en botón Login
            manualLoginBtn.addEventListener('click', () => {
                loginModal.show();
            });

            // 3. Mostrar al intentar acción protegida
            protectedElements.forEach(element => {
                element.addEventListener('click', (e) => {
                    <?php if(!session()->has('logged_in')): ?>
                        e.preventDefault();
                        loginModal.show();
                        
                        // Opcional: Guardar la acción intentada
                        const actionUrl = element.href || element.dataset.action;
                        if(actionUrl) {
                            document.getElementById('loginForm').dataset.redirect = actionUrl;
                        }
                    <?php endif; ?>
                });
            });
        });
    </script>