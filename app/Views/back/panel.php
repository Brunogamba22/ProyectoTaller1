<?php if (session()->get('perfil_id') == 1): // Administrador ?>
    <ul>
        <li class="nav-item">
            <a class="nav-link text-warning" href="<?= base_url('Lista_compras') ?>">Lista Compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-warning" href="<?= base_url('Lista_ventas') ?>">Lista Ventas</a>
        </li>
        <!-- Más opciones solo para admin -->
    </ul>
<?php elseif (session()->get('perfil_id') == 2): // Cliente ?>
    <ul>
        <li class="nav-item">
            <a class="nav-link text-success" href="<?= base_url('mis_compras') ?>">Mis Compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" href="<?= base_url('mi_perfil') ?>">Mi Perfil</a>
        </li>
        <!-- Más opciones solo para cliente -->
    </ul>
<?php else: ?>
    <p>No tienes permisos para ver este panel.</p>
<?php endif; ?>