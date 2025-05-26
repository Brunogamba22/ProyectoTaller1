<?php
$session = session();
$nombre = $session->get('nombre');
$logged_in = $session->get('logged_in');
$perfil_id = $session->get('perfil_id');
?>

<section class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-personalizada fixed-top shadow">
        <div class="container">
            <a class="navbar-brand text-black" href="<?= base_url('principal') ?>">UMMA</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion"
                aria-controls="menuNavegacion" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavegacion">
                <ul class="navbar-nav w-100 align-items-center">

                    <!-- Menú principal -->
                    <li class="nav-item">
                        <a class="nav-link text-light <?= (current_url() == base_url('principal')) ? 'active' : '' ?>"
                            href="<?= base_url('principal') ?>">Inicio</a>
                    </li>

                    <!-- Dropdown Productos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light <?= (current_url() == base_url('Productos')) ? 'active' : '' ?>"
                            href="#" id="productos-tab" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productos-tab">
                            <li><a class="dropdown-item" href="<?= base_url('Productos') ?>">TODOS LOS PRODUCTOS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Remeras') ?>">REMERAS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Buzos') ?>">BUZOS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Camisas') ?>">CAMISAS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Camperas') ?>">CAMPERAS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Calzado') ?>">CALZADO</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black <?= (current_url() == base_url('Comercializacion')) ? 'active' : '' ?>"
                            href="<?= base_url('Comercializacion') ?>">Comercialización</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black <?= (current_url() == base_url('Sobrenosotros')) ? 'active' : '' ?>"
                            href="<?= base_url('Sobrenosotros') ?>">Sobre Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black <?= (current_url() == base_url('Contacto')) ? 'active' : '' ?>"
                            href="<?= base_url('Contacto') ?>">Contacto</a>
                    </li>

                    <?php if ($logged_in): ?>
                        <li class="nav-item">
                            <span class="nav-link">Bienvenido: <?= $nombre ?></span>
                        </li>

                        <?php if ($perfil_id == 2): // Solo clientes ?>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="<?= base_url('cliente/pedidos') ?>">Mis Pedidos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="<?= base_url('cliente/perfil') ?>">Mi Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="<?= base_url('carrito') ?>">Carrito</a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item">
                            <a class="nav-link text-danger" href="<?= base_url('/logout') ?>">Cerrar Sesión</a>
                        </li>
                    <?php else: ?>
                        <!-- No logueado -->
                        <li class="nav-item">
                            <a class="nav-link text-black" href="<?= base_url('Registrarse') ?>">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="<?= base_url('login') ?>">Login</a>
                        </li>
                    <?php endif; ?>


                    <!-- Buscador -->
                    <li class="nav-item ms-lg-auto">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar productos..."
                                aria-label="Buscar">
                            <button class="btn btn-buscar" type="submit">Buscar</button>
                        </form>
                    </li>

                    <!-- Carrito -->
                    <li class="nav-item ms-2">
                        <a class="nav-link position-relative" href="<?= base_url('carrito') ?>" aria-label="Carrito de compras">
                            <i class="fas fa-shopping-cart fa-lg" style="color: var(--dorado);"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                                <span class="visually-hidden">items en el carrito</span>
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</section>