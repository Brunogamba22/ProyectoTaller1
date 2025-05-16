<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('Productos', 'Home::productos');
$routes->get('Remeras', 'Home::remeras');
$routes->get('Buzos', 'Home::buzos');
$routes->get('Camperas', 'Home::camperas');
$routes->get('Calzado', 'Home::calzado');
$routes->get('Camisas', 'Home::camisas');
$routes->get('Comercializacion', 'Home::comercializacion');
$routes->get('Sobrenosotros', 'Home::sobrenosotros');
$routes->get('Contacto', 'Home::contacto');
$routes->get('Registrarse', 'Home::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');
$routes->get('/dashboard', 'Dashboard::index', ['filters'=> 'auth']);
