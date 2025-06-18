<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-admin shadow-sm fixed-top">
    <div class="container-fluid px-4">
        <!-- Brand/Logo -->
        <a class="navbar-brand d-flex align-items-center fw-bold" href="<?= base_url('admin') ?>">
            <i class="fas fa-shield-alt me-2"></i>
            <span>Panel Admin UMMA</span>
        </a>
        
        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ms-auto gap-2">
                <!-- Menú Usuarios -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle admin-nav-link" href="#" id="usuariosDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-users-cog me-1"></i> Usuarios
                    </a>
                    <ul class="dropdown-menu dropdown-menu-admin">
                        <li><a class="dropdown-item" href="<?= base_url('listaUsuarios') ?>">
                            <i class="fas fa-list-ol me-2"></i>Listado Completo
                        </a></li>
                        <li><a class="dropdown-item" href="<?= base_url('altaUsuario') ?>">
                            <i class="fas fa-user-plus me-2"></i>Crear Usuario
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                
                <!-- Menú Productos -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle admin-nav-link" href="#" id="productosDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-cubes me-1"></i> Productos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-admin">
                        <li><a class="dropdown-item" href="<?= base_url('Listado') ?>">
                            <i class="fas fa-boxes me-2"></i>Listado de Productos
                        </a></li>
                        <li><a class="dropdown-item" href="<?= base_url('AltaProductos') ?>">
                            <i class="fas fa-plus-circle me-2"></i>Alta Producto
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                       
                    </ul>
                </li>
                
                <!-- Ventas -->
                <li class="nav-item">
                    <a class="nav-link admin-nav-link" href="<?= base_url('admin/ventas') ?>">
                        <i class="fas fa-chart-pie me-1"></i> Ventas
                    </a>
                </li>
                
                <!-- Consultas -->
                <li class="nav-item">
                    <a class="nav-link admin-nav-link" href="<?= base_url('admin/consultas') ?>">
                        <i class="fas fa-comments me-1"></i> Consultas
                    </a>
                </li>
                
                <!-- Logout -->
                <li class="nav-item ms-lg-2">
                    <a class="nav-link admin-nav-link logout-btn" href="<?= base_url('/logout') ?>">
                        <i class="fas fa-power-off me-1"></i> Salir
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>