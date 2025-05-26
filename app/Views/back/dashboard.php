<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin/panel') ?>">Panel Admin</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/usuarios') ?>">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/productos') ?>">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="<?= base_url('/logout') ?>">Cerrar sesión</a>
            </li>
        </ul>
    </div>
</nav>
