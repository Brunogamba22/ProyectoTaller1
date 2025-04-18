
    <!-- Barra de navegación -->
    <section class="conteiner-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-personalizada">
        <div class="container">
            <a class="navbar-brand" href="#">UMMA</a>
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
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('ropa');?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ropa</a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="remeras">Remeras</a></li>
                            <li> <a class="dropdown-item" href="#">Buzos</a></li>
                            <li> <a class="dropdown-item" href="#">Camisas</a></li>
                            <li> <a class="dropdown-item" href="camperas">Camperas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('calzado');?>">Calzado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('sobrenosotros');?>">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('contacto');?>">Contacto</a>
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
    
