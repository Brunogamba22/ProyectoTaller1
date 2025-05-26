<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ==============================================
// RUTAS PÚBLICAS (accesibles sin autenticación)
// ==============================================

// Páginas principales
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');

// Catálogo de productos
$routes->get('Productos', 'Home::productos');
$routes->get('Remeras', 'Home::remeras');
$routes->get('Buzos', 'Home::buzos');
$routes->get('Camperas', 'Home::camperas');
$routes->get('Calzado', 'Home::calzado');
$routes->get('Camisas', 'Home::camisas');

// Información de la empresa
$routes->get('Comercializacion', 'Home::comercializacion');
$routes->get('Sobrenosotros', 'Home::sobrenosotros');
$routes->get('Contacto', 'Home::contacto');

// Autenticación
$routes->get('login', 'Home::loguearse');
$routes->post('/auth', 'login_controller::auth');
$routes->get('logout', 'login_controller::logout');
$routes->get('Registrarse', 'Home::registro');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');

// Páginas legales
$routes->get('TerminoYcondiciones', 'Home::TerminosYcondiciones');
$routes->get('PoliticaDeprivacidad', 'Home::PoliticaDeprivacidad');
$routes->get('PreguntasFrecuentes', 'Home::PreguntasFrecuentes');

// ==============================================
// RUTAS PARA CLIENTES LOGUEADOS (perfil_id = 2)
// ==============================================
$routes->get('carrito', 'Home::carrito');
$routes->get('miPerfil', 'Home::');


// ==============================================
// RUTAS PARA ADMINISTRADORES (perfil_id = 1)
// ==============================================

$routes->get('admin', 'Dashboard_Admin::index');
// ... otras rutas de admin


// ==============================================1
// RUTAS COMUNES AUTENTICADAS (cualquier perfil)
// ==============================================








