<?php if (session()->get('tipo_usuario') === 'admin'): ?>
    <ul>
        <li class="nav-item">
            <a class="nav-link text-warning" href="<?= base_url('Lista_compras') ?>">Lista Compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-warning" href="<?= base_url('Lista_ventas') ?>">Lista Ventas</a>
        </li>
        <!-- Aquí puedes agregar más opciones solo para admin -->
    </ul>
<?php elseif (session()->get('tipo_usuario') === 'cliente'): ?>
    <ul>
        <li class="nav-item">
            <a class="nav-link text-success" href="<?= base_url('mis_compras') ?>">Mis Compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" href="<?= base_url('mi_perfil') ?>">Mi Perfil</a>
        </li>
        <!-- Aquí puedes agregar más opciones solo para cliente -->
    </ul>
<?php else: ?>
    <p>No tienes permisos para ver este panel.</p>
<?php endif; ?>