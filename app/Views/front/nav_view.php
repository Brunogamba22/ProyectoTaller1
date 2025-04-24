
    <!-- Barra de navegación -->
    <section class="conteiner-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-personalizada">
        <div class="container">
            <a class="navbar-brand">UMMA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavegacion">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('principal');?>">Inicio</a> <!--en PHP 'echo base_url' (especialmente en el framework CodeIgniter) significa:
                                                                                                Mostrar (imprimir) la URL base de tu aplicación web.-->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('Productos');?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('Productos'); ?>">TODOS LOS PRODUCTOS</a></li>
                            <li> <a class="dropdown-item" href="<?php echo base_url('Remeras'); ?>">REMERAS</a></li>
                            <li> <a class="dropdown-item" href="<?php echo base_url('Buzos'); ?>">BUZOS</a></li>
                            <li> <a class="dropdown-item" href="<?php echo base_url('Camisas'); ?>">CAMISAS</a></li>
                            <li> <a class="dropdown-item" href="<?php echo base_url('Camperas'); ?>">CAMPERAS</a></li>
                            <li> <a class="dropdown-item" href="<?php echo base_url('Calzado'); ?>">CALZADO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Comercializacion');?>">Comercialización</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Sobrenosotros');?>">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Contacto');?>">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Buscar">
                    <button class="btn btn-buscar" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    </section>
    
