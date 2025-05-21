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
$routes->get('login', 'Home::loguearse');
$routes->post('/auth', 'Login_controller::auth'); // Procesa el login
$routes->get('/logout','login_controller::logout');// Cierra sesión
$routes->post('/enviar-form', 'Usuario_controller::formValidation');
$routes->get('Registrarse', 'Home::create');
$routes->get('/dashboard', 'Dashboard::index', ['filters'=> 'auth']);

$routes->get('TerminoYcondiciones', 'Home::TerminosYcondiciones');
$routes->get('PoliticaDeprivacidad', 'Home::PoliticaDeprivacidad');
$routes->get('PreguntasFrecuentes', 'Home::PreguntasFrecuentes');
$routes->get('carrito', 'Home::carrito');
