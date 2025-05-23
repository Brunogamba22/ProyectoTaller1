<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Página principal
$routes->get('/', 'Home::index');
// Página principal (alias)
$routes->get('principal', 'Home::index');
// Página de productos
$routes->get('Productos', 'Home::productos');
// Página de remeras
$routes->get('Remeras', 'Home::remeras');
// Página de buzos
$routes->get('Buzos', 'Home::buzos');
// Página de camperas
$routes->get('Camperas', 'Home::camperas');
// Página de calzado
$routes->get('Calzado', 'Home::calzado');
// Página de camisas
$routes->get('Camisas', 'Home::camisas');
// Página de comercialización
$routes->get('Comercializacion', 'Home::comercializacion');
// Página sobre nosotros
$routes->get('Sobrenosotros', 'Home::sobrenosotros');
// Página de contacto
$routes->get('Contacto', 'Home::contacto');
// Página de login
$routes->get('login', 'Home::loguearse');
// Procesa el login
$routes->post('/auth', 'Login_controller::auth');
// Cierra sesión
$routes->get('/logout','login_controller::logout');

//REGISTRARSE
// Página de registro de usuario
$routes->get('Registrarse', 'Home::registro');
// Procesa el registro de usuario
$routes->post('/enviar-form', 'Usuario_controller::formValidation');

// Página de dashboard (requiere autenticación)
$routes->get('/panel', 'Panel_controller::index', ['filters'=> 'auth']);

// Página de términos y condiciones
$routes->get('TerminoYcondiciones', 'Home::TerminosYcondiciones');
// Página de política de privacidad
$routes->get('PoliticaDeprivacidad', 'Home::PoliticaDeprivacidad');
// Página de preguntas frecuentes
$routes->get('PreguntasFrecuentes', 'Home::PreguntasFrecuentes');
// Página del carrito de compras
$routes->get('carrito', 'Home::carrito');



//Panel de Usuario
$routes->get('lista_usuarios', '::TerminosYcondiciones');
