<!-- 
Barra de navegación principal tipo Tabs 
Utiliza Bootstrap 5 para crear una navbar responsive con opciones colapsables en móviles.
-->

<section class="container-fluid p-0"> <!-- Contenedor que ocupa todo el ancho de la pantalla sin padding -->
    
    <!-- Navbar principal -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-personalizada fixed-top shadow">
        <div class="container"> <!-- Contenedor que centra el contenido -->

            <!-- Logo / Marca del sitio -->
            <a class="navbar-brand text-black" href="#">UMMA</a>

            <!-- Botón para móviles -->
            <!-- Se muestra en resoluciones pequeñas para abrir/cerrar el menú de navegación -->
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#menuNavegacion" 
                aria-controls="menuNavegacion" 
                aria-expanded="false" 
                aria-label="Alternar navegación"
            >
                <span class="navbar-toggler-icon"></span> <!-- Icono de menú hamburguesa -->
            </button>

            <!-- Menú colapsable (contenido que se oculta/muestra en móviles) -->
            <div class="collapse navbar-collapse" id="menuNavegacion">
                
                <!-- Lista de elementos de navegación -->
                <ul class="navbar-nav w-100 align-items-center"> <!-- w-100: ocupa todo el ancho -->

                    <!-- Ítem: Inicio -->
                    <li class="nav-item" role="presentation">
                        <a 
                            class="nav-link text-light btn btn-link <?= (current_url() == base_url('principal')) ? 'active' : '' ?>" 
                            id="inicio-tab" 
                            href="<?= base_url('principal') ?>"
                        >
                            Inicio
                        </a>
                    </li>

                    <!-- Ítem: Productos con submenú desplegable, 
                    (current_url() == base_url('Productos')) ? 'active' : '' 
                    Resalta la sección activa según la URL actual (resalta la página donde estás navegando). 
                    -->
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle text-light <?= (current_url() == base_url('Productos')) ? 'active' : '' ?>" 
                            id="productos-tab" 
                            href="<?= base_url('Productos') ?>" 
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                        >
                            Productos
                        </a>

                        <!-- Submenú de categorías -->
                        <ul class="dropdown-menu" aria-labelledby="productos-tab">
                            <li><a class="dropdown-item" href="<?= base_url('Productos') ?>">TODOS LOS PRODUCTOS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Remeras') ?>">REMERAS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Buzos') ?>">BUZOS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Camisas') ?>">CAMISAS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Camperas') ?>">CAMPERAS</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Calzado') ?>">CALZADO</a></li>
                        </ul>
                    </li>

                    <!-- Ítem: Comercialización -->
                    <li class="nav-item">
                        <a 
                            class="nav-link text-black btn btn-link <?= (current_url() == base_url('Comercializacion')) ? 'active' : '' ?>" 
                            id="comercializacion-tab" 
                            href="<?= base_url('Comercializacion') ?>"
                        >
                            Comercialización
                        </a>
                    </li>

                    <!-- Ítem: Sobre Nosotros -->
                    <li class="nav-item">
                        <a 
                            class="nav-link text-black btn btn-link <?= (current_url() == base_url('Sobrenosotros')) ? 'active' : '' ?>" 
                            id="sobrenosotros-tab" 
                            href="<?= base_url('Sobrenosotros') ?>"
                        >
                            Sobre Nosotros
                        </a>
                    </li>

                    <!-- Ítem: Contacto -->
                    <li class="nav-item">
                        <a 
                            class="nav-link text-black btn btn-link <?= (current_url() == base_url('Contacto')) ? 'active' : '' ?>" 
                            id="contacto-tab" 
                            href="<?= base_url('Contacto') ?>"
                        >
                            Contacto
                        </a>
                    </li>

                    <li class="nav-item">
                        <a 
                            class="nav-link text-black btn btn-link <?= (current_url() == base_url('Registrarse')) ? 'active' : '' ?>" 
                            id="registrarse-tab" 
                            href="<?= base_url('Registrarse') ?>"
                        >
                            Registrarse
                        </a>
                    </li>

                    <!-- Buscador de productos -->
                    <li class="nav-item ms-lg-auto"> <!-- ms-lg-auto: empuja el buscador a la derecha en pantallas grandes -->
                        <form class="d-flex" role="search">
                            <input 
                                class="form-control me-2" 
                                type="search" 
                                placeholder="Buscar productos..." 
                                aria-label="Buscar"
                            >
                            <button class="btn btn-buscar" type="submit">Buscar</button>
                        </form>
                    </li>

                    <!-- Nuevo ítem: Carrito de compras -->
                    <li class="nav-item ms-2">
                        <a 
                            class="nav-link position-relative" 
                            href="<?= base_url('carrito') ?>"
                            aria-label="Carrito de compras"
                        >
                            <i class="fas fa-shopping-cart fa-lg" style="color: var(--dorado);"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0 <!-- Aquí puedes poner el número dinámico de items -->
                                <span class="visually-hidden">items en el carrito</span>
                            </span>
                        </a>
                    </li>
                    
                </ul>
                <!-- Fin lista de navegación -->
            </div>
            <!-- Fin contenido colapsable -->
        </div> <!-- Fin contenedor centralizado -->
    </nav>
    <!-- Fin navbar -->
</section>
<!-- Fin sección navbar -->
