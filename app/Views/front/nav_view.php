
<!-- Barra de navegación tipo Tabs -->
<section class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-personalizada fixed-top shadow">
        <div class="container">

        <!-- Logo / Marca -->
        <a class="navbar-brand text-black" href="#">UMMA</a>

        <!-- Botón hamburguesa para móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Alternar navegación">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido que se colapsa -->
        <div class="collapse navbar-collapse" id="menuNavegacion">
            <ul class="navbar-nav w-100 align-items-center">

                <li class="nav-item" role="presentation">
                    <a 
                        class="nav-link text-light btn btn-link <?= (current_url() == base_url('principal')) ? 'active' : '' ?>" 
                        id="inicio-tab" 
                        href="<?= base_url('principal') ?>"
                    >
                        Inicio
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a 
                        class="nav-link dropdown-toggle text-light <?= (current_url() == base_url('Productos')) ? 'active' : '' ?>" 
                        id="productos-tab" 
                        href="#" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false"
                    >
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
                    <a 
                        class="nav-link text-black btn btn-link <?= (current_url() == base_url('Comercializacion')) ? 'active' : '' ?>" 
                        id="comercializacion-tab" 
                        href="<?= base_url('Comercializacion') ?>"
                    >
                        Comercialización
                    </a>
                </li>

                <li class="nav-item">
                    <a 
                        class="nav-link text-black btn btn-link <?= (current_url() == base_url('Sobrenosotros')) ? 'active' : '' ?>" 
                        id="sobrenosotros-tab" 
                        href="<?= base_url('Sobrenosotros') ?>"
                    >
                        Sobre Nosotros
                    </a>
                </li>

                <li class="nav-item">
                    <a 
                        class="nav-link text-black btn btn-link <?= (current_url() == base_url('Contacto')) ? 'active' : '' ?>" 
                        id="contacto-tab" 
                        href="<?= base_url('Contacto') ?>"
                    >
                        Contacto
                    </a>
                </li>

                <li class="nav-item ms-lg-auto">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Buscar">
                        <button class="btn btn-danger" type="submit">Buscar</button>
                    </form>
                </li>

            </ul>
        </div>

        </div>
    </nav>
</section>

