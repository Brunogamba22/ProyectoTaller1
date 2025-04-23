<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('ropa', 'Home::ropa');
$routes->get('remeras', 'Home::remeras');
$routes->get('camperas', 'Home::camperas');
$routes->get('calzado', 'Home::calzado');
$routes->get('Comercializacion', 'Home::Comercializacion');
$routes->get('sobrenosotros', 'Home::sobrenosotros');
$routes->get('contacto', 'Home::contacto');
