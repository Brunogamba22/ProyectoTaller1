<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('sobrenosotros', 'Home::sobrenosotros');
$routes->get('calzado', 'Home::calzado');
$routes->get('contacto', 'Home::contacto');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('login', 'Home::login');