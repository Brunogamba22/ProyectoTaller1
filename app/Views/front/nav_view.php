
<?php
$session = session();
$nombre = $session->get('nombre');
$logged_in = $session->get('logged_in');
$perfil_id = $session->get('perfil_id');
?>

<!-- Navbar Modernizado -->
<nav class="navbar navbar-expand-lg navbar-umma fixed-top shadow-sm">
    <div class="container">
        <!-- Logo/Marca -->
        <a class="navbar-brand" href="<?= base_url('principal') ?>">
            <span style="color: var(--marron-oscuro); font-weight: 700; font-size: 1.5rem;">UMMA</span>
        </a>

        <!-- Botón móvil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUMMA" 
                aria-controls="navbarUMMA" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list" style="color: var(--marron-oscuro); font-size: 1.75rem;"></i>
        </button>

        <!-- Contenido del navbar -->
        <div class="collapse navbar-collapse" id="navbarUMMA">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Inicio -->
                <li class="nav-item">
                    <a class="nav-link <?= (current_url() == base_url('principal')) ? 'active' : '' ?>" 
                    href="<?= base_url('principal') ?>">
                        Inicio
                    </a>
                </li>

                <!-- Menú desplegable de Productos - CORREGIDO -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= (strpos(current_url(), 'Productos') !== false) ? 'active' : '' ?>"
                    href="#"
                    id="navbarDropdownProductos"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProductos">
                       <li><a class="dropdown-item" href="<?= base_url('productos') ?>">Todos los productos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= base_url('productos/remeras') ?>">Remeras</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('productos/buzos') ?>">Buzos</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('productos/camisas') ?>">Camisas</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('productos/camperas') ?>">Camperas</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('productos/calzado') ?>">Calzado</a></li>
                    </ul>
                </li>

                <!-- Resto de enlaces -->
                <li class="nav-item">
                    <a class="nav-link <?= (current_url() == base_url('Comercializacion')) ? 'active' : '' ?>" 
                       href="<?= base_url('Comercializacion') ?>">
                        Comercialización
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= (current_url() == base_url('Sobrenosotros')) ? 'active' : '' ?>" 
                       href="<?= base_url('Sobrenosotros') ?>">
                        Sobre Nosotros
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= (current_url() == base_url('Contacto')) ? 'active' : '' ?>" 
                       href="<?= base_url('Contacto') ?>">
                        Contacto
                    </a>
                </li>
            </ul>

            <!-- Parte derecha del navbar -->
            <div class="d-flex align-items-center">
                 <div class="search-container">
                    <!-- Icono de lupa -->
                    <button class="search-icon" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                    
                    <!-- Barra de búsqueda -->
                    <div class="search-bar">
                        <form class="search-form">
                            <input class="search-input" type="search" placeholder="Buscar productos...">
                            <button type="submit" class="visually-hidden">Buscar</button>
                        </form>
                    </div>
                </div>

                <!-- Carrito -->
                <a class="nav-link me-3 cart-icon" href="<?= base_url('carrito') ?>">
                    <i class="bi bi-cart3"></i>
                    <span class="cart-badge">0</span>
                </a>

                <!-- Usuario -->
                <?php if ($logged_in): ?>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle user-dropdown" href="#" id="navbarDropdownUser" 
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-1"></i>
                            <?= $nombre ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                            <?php if ($perfil_id == 2): ?>
                                <li><a class="dropdown-item" href="<?= base_url('misPedidos') ?>">
                                    <i class="bi bi-bag me-2"></i>Mis Pedidos</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('miPerfil') ?>">
                                    <i class="bi bi-person me-2"></i>Mi Perfil</a></li>
                            <?php endif; ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="<?= base_url('/logout') ?>">
                                <i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="auth-buttons">
                        <a class="btn btn-outline me-2" href="<?= base_url('login') ?>">Ingresar</a>
                        <a class="btn btn-primary" href="<?= base_url('Registrarse') ?>">Registrarse</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
